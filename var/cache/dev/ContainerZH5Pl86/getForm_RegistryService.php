<?php

namespace ContainerZH5Pl86;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Form\\ClasesType' => ['privates', 'App\\Form\\ClasesType', 'getClasesTypeService', true],
            'App\\Form\\ClasesType2' => ['privates', 'App\\Form\\ClasesType2', 'getClasesType2Service', true],
            'App\\Form\\DotesType' => ['privates', 'App\\Form\\DotesType', 'getDotesTypeService', true],
            'App\\Form\\DotesType2' => ['privates', 'App\\Form\\DotesType2', 'getDotesType2Service', true],
            'App\\Form\\Habilidades5Type' => ['privates', 'App\\Form\\Habilidades5Type', 'getHabilidades5TypeService', true],
            'App\\Form\\HabilidadesType1' => ['privates', 'App\\Form\\HabilidadesType1', 'getHabilidadesType1Service', true],
            'App\\Form\\HechizosType' => ['privates', 'App\\Form\\HechizosType', 'getHechizosTypeService', true],
            'App\\Form\\HechizosType2' => ['privates', 'App\\Form\\HechizosType2', 'getHechizosType2Service', true],
            'App\\Form\\RazasType' => ['privates', 'App\\Form\\RazasType', 'getRazasTypeService', true],
            'App\\Form\\RazasType2' => ['privates', 'App\\Form\\RazasType2', 'getRazasType2Service', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\SubclasesType' => ['privates', 'App\\Form\\SubclasesType', 'getSubclasesTypeService', true],
            'App\\Form\\SubclasesType2' => ['privates', 'App\\Form\\SubclasesType2', 'getSubclasesType2Service', true],
            'App\\Form\\SubrazasType' => ['privates', 'App\\Form\\SubrazasType', 'getSubrazasTypeService', true],
            'App\\Form\\SubrazasType2' => ['privates', 'App\\Form\\SubrazasType2', 'getSubrazasType2Service', true],
            'App\\Form\\TrasfondoType' => ['privates', 'App\\Form\\TrasfondoType', 'getTrasfondoTypeService', true],
            'App\\Form\\TrasfondoType2' => ['privates', 'App\\Form\\TrasfondoType2', 'getTrasfondoType2Service', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\ClasesType' => '?',
            'App\\Form\\ClasesType2' => '?',
            'App\\Form\\DotesType' => '?',
            'App\\Form\\DotesType2' => '?',
            'App\\Form\\Habilidades5Type' => '?',
            'App\\Form\\HabilidadesType1' => '?',
            'App\\Form\\HechizosType' => '?',
            'App\\Form\\HechizosType2' => '?',
            'App\\Form\\RazasType' => '?',
            'App\\Form\\RazasType2' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\SubclasesType' => '?',
            'App\\Form\\SubclasesType2' => '?',
            'App\\Form\\SubrazasType' => '?',
            'App\\Form\\SubrazasType2' => '?',
            'App\\Form\\TrasfondoType' => '?',
            'App\\Form\\TrasfondoType2' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? self::getDataCollector_FormService($container))));
    }
}
