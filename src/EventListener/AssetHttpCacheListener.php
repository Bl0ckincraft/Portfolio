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
        $contentType = $event->getResponse()->headers->get("Content-Type");
        if (str_starts_with($contentType, "image") || str_starts_with($contentType, "font")) {
            $event->getResponse()->setCache([
                "max-age" => 864000
            ]);
        }
    }
}
