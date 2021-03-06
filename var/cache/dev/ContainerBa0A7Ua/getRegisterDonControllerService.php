<?php

namespace ContainerBa0A7Ua;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterDonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegisterDonController' shared autowired service.
     *
     * @return \App\Controller\RegisterDonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegisterDonController.php';

        $container->services['App\\Controller\\RegisterDonController'] = $instance = new \App\Controller\RegisterDonController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\RegisterDonController', $container));

        return $instance;
    }
}
