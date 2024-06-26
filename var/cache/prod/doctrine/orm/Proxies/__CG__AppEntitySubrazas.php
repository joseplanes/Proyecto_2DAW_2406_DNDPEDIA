<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subrazas extends \App\Entity\Subrazas implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'AtaqueDesarmado' => [parent::class, 'AtaqueDesarmado', null],
        "\0".parent::class."\0".'Autor' => [parent::class, 'Autor', null],
        "\0".parent::class."\0".'Carisma' => [parent::class, 'Carisma', null],
        "\0".parent::class."\0".'Constitucion' => [parent::class, 'Constitucion', null],
        "\0".parent::class."\0".'Descripcion' => [parent::class, 'Descripcion', null],
        "\0".parent::class."\0".'Destreza' => [parent::class, 'Destreza', null],
        "\0".parent::class."\0".'Fuerza' => [parent::class, 'Fuerza', null],
        "\0".parent::class."\0".'Inteligencia' => [parent::class, 'Inteligencia', null],
        "\0".parent::class."\0".'Nombre' => [parent::class, 'Nombre', null],
        "\0".parent::class."\0".'Sabiduria' => [parent::class, 'Sabiduria', null],
        "\0".parent::class."\0".'Validado' => [parent::class, 'Validado', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'img' => [parent::class, 'img', null],
        "\0".parent::class."\0".'raza_id' => [parent::class, 'raza_id', null],
        'AtaqueDesarmado' => [parent::class, 'AtaqueDesarmado', null],
        'Autor' => [parent::class, 'Autor', null],
        'Carisma' => [parent::class, 'Carisma', null],
        'Constitucion' => [parent::class, 'Constitucion', null],
        'Descripcion' => [parent::class, 'Descripcion', null],
        'Destreza' => [parent::class, 'Destreza', null],
        'Fuerza' => [parent::class, 'Fuerza', null],
        'Inteligencia' => [parent::class, 'Inteligencia', null],
        'Nombre' => [parent::class, 'Nombre', null],
        'Sabiduria' => [parent::class, 'Sabiduria', null],
        'Validado' => [parent::class, 'Validado', null],
        'id' => [parent::class, 'id', null],
        'img' => [parent::class, 'img', null],
        'raza_id' => [parent::class, 'raza_id', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
