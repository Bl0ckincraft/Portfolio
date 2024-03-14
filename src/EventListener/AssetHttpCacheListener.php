<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class AssetHttpCacheListener
{
    #[AsEventListener(event: KernelEvents::RESPONSE)]
    public function onKernelResponse(ResponseEvent $event): void
    {
        $contentType = $event->getResponse()->headers->get("content-type");
        if (str_starts_with($contentType, "image") || str_starts_with($contentType, "font")) {
            $event->getResponse()->setCache([
                'public' => true,
                'max_age' => 864000,
                's_maxage' => 864000,
            ]);
        }
    }
}
