<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mime\MimeTypes;

final class CachePublicAssetsListener
{
    #[AsEventListener(event: KernelEvents::RESPONSE)]
    public function onKernelResponse(ResponseEvent $event): void
    {
        $mime = new MimeTypes();
        $mimeExt = $mime->getMimeTypes(pathinfo($event->getRequest()->getRequestUri(), PATHINFO_EXTENSION));

        $required = ["image", "font"];

        foreach ($mimeExt as $ext) {
            foreach ($required as $req) {
                if (str_starts_with($ext, $req)) {
                    $response = $event->getResponse();
                    $response->setCache([
                        'must_revalidate' => true,
                        'public' => true,
                        'max_age' => 60 * 60 * 24 * 10,
                        's_maxage' => 60 * 60 * 24 * 10,
                    ]);
                    $event->setResponse($response);
                    return;
                }
            }
        }
    }
}
