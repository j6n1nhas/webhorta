<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProdutoControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProdutoController' shared autowired service.
     *
     * @return \App\Controller\ProdutoController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProdutoController'] = $instance = new \App\Controller\ProdutoController();

        $instance->setContainer(($container->privates['.service_locator._13vCgV'] ?? $container->load('get_ServiceLocator_13vCgVService'))->withContext('App\\Controller\\ProdutoController', $container));

        return $instance;
    }
}