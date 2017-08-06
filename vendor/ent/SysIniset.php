<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysIniset
 *
 * @ORM\Table(name="sys_iniset")
 * @ORM\Entity
 */
class SysIniset
{
    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowId;

    /**
     * @var string
     *
     * @ORM\Column(name="parameter", type="string", length=255, nullable=true)
     */
    private $parameter;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


}

