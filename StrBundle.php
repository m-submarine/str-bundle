<?php
namespace Leland\StrBundle;
use Leland\StrBundle\DependencyInjection\StrExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class StrBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        $container->registerExtension(new StrExtension());
    }
}