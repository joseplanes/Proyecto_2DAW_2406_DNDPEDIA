<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabilidades5TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Habilidades5Type' shared autowired service.
     *
     * @return \App\Form\Habilidades5Type
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Habilidades5Type'] = new \App\Form\Habilidades5Type();
    }
}
