<?php

namespace ContainerNfy08er;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q4VmAr8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q4VmAr8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q4VmAr8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'flashyNotifier' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'flashyNotifier' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}