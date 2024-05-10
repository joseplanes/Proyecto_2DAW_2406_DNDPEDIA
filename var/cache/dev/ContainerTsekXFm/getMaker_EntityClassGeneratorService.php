<?php

namespace ContainerTsekXFm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_EntityClassGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.entity_class_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php';

        return $container->privates['maker.entity_class_generator'] = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')));
    }
}
