<?php

namespace ContainerZGhYCKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSignupFormService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SignupForm' shared autowired service.
     *
     * @return \App\Form\SignupForm
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SignupForm'] = new \App\Form\SignupForm();
    }
}