<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OJizLwdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.OJizLwd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OJizLwd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fu' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
        ], [
            'em' => '?',
            'fu' => 'App\\Service\\FileUploader',
        ]);
    }
}
