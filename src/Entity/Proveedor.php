<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 */
class Proveedor
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_proveedor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Correo_electronico", type="string", length=255, nullable=false)
     */
    private $correoElectronico;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_proveedor", type="string", length=255, nullable=false)
     */
    private $tipoProveedor;

    /**
     * @var bool
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;


}
