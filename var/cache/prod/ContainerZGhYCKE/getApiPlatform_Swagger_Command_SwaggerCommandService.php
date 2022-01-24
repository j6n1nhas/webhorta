<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Swagger_Command_SwaggerCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.swagger.command.swagger_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['api_platform.swagger.command.swagger_command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(($container->privates['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', NULL, $container->parameters['api_platform.swagger.versions']);

        $instance->setName('api:swagger:export');

        return $instance;
    }
}