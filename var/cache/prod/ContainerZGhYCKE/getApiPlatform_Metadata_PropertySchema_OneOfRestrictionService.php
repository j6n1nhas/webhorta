<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.metadata.property_schema.one_of_restriction' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.metadata.property_schema.one_of_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.metadata.property_schema.length_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.length_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction()));
            yield 1 => ($container->privates['api_platform.metadata.property_schema.one_of_restriction'] ?? $container->load('getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService'));
            yield 2 => ($container->privates['api_platform.metadata.property_schema.regex_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.regex_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction()));
            yield 3 => ($container->privates['api_platform.metadata.property_schema.format_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.format_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat()));
        }, 4));
    }
}
