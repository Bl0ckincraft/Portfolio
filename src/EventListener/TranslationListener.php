<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Contracts\Translation\TranslatorInterface;

final class TranslationListener
{
    public function __construct(private TranslatorInterface $translator)
    {

    }

    #[AsEventListener(event: KernelEvents::REQUEST)]
    public function onKernelRequest(RequestEvent $event): void
    {
        $browserLocale = $event->getRequest()->getPreferredLanguage(['en', 'fr']);
        $this->translator->setLocale($browserLocale);
    }
}
