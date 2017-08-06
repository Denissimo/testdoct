<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodephp
 *
 * @ORM\Table(name="sys_nodephp")
 * @ORM\Entity
 */
class SysNodephp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nodename", type="string", length=64, nullable=true)
     */
    private $nodename;

    /**
     * @var string
     *
     * @ORM\Column(name="phpcode", type="text", length=16777215, nullable=true)
     */
    private $phpcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="xcoord", type="integer", nullable=true)
     */
    private $xcoord;

    /**
     * @var integer
     *
     * @ORM\Column(name="ycoord", type="integer", nullable=true)
     */
    private $ycoord;


}

