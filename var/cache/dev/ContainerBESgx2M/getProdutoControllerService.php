<?php

namespace ContainerBESgx2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProdutoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProdutoController' shared autowired service.
     *
     * @return \App\Controller\ProdutoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProdutoController.php';

        $container->services['App\\Controller\\ProdutoController'] = $instance = new \App\Controller\ProdutoController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProdutoController', $container));

        return $instance;
    }
}
