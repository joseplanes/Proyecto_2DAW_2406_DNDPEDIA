<?php

namespace ContainerLS4qEPp;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabilidades5TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Habilidades5Type' shared autowired service.
     *
     * @return \App\Form\Habilidades5Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Habilidades5Type.php';

        return $container->privates['App\\Form\\Habilidades5Type'] = new \App\Form\Habilidades5Type();
    }
}
