<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodedata
 *
 * @ORM\Table(name="sys_nodedata")
 * @ORM\Entity
 */
class SysNodedata
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
     * @ORM\Column(name="nodetype", type="string", length=16, nullable=true)
     */
    private $nodetype;

    /**
     * @var string
     *
     * @ORM\Column(name="nodevar", type="string", length=32, nullable=true)
     */
    private $nodevar;

    /**
     * @var string
     *
     * @ORM\Column(name="nodeindex", type="string", length=255, nullable=true)
     */
    private $nodeindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodevalue", type="integer", nullable=true)
     */
    private $nodevalue;

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

