<?php

namespace ContainerSWHUxse;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SearchType' shared autowired service.
     *
     * @return \App\Form\SearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SearchType'] = new \App\Form\SearchType();
    }
}
