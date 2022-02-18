<?php

namespace ContainerSWHUxse;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4N2tuNNService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.4N2tuNN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4N2tuNN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', 'App\\Classe\\Cart', 'getCartService', true],
        ], [
            'cart' => 'App\\Classe\\Cart',
        ]);
    }
}
