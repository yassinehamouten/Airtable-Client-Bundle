<?php

declare(strict_types=1);

namespace Yoanbernabeu\AirtableClientBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Yoanbernabeu\AirtableClientBundle\DependencyInjection\AirtableClientExtension;

class AirtableClientBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension(): ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new AirtableClientExtension();
        }

        return $this->extension;
    }
}
