<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DbFJ5zgService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.dbFJ5zg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dbFJ5zg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'session' => ['privates', '.errored..service_locator.dbFJ5zg.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.dbFJ5zg": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists.'],
        ], [
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
        ]);
    }
}
