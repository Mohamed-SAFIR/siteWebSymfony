<?php

namespace ContainerHPGU4x6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }
}
