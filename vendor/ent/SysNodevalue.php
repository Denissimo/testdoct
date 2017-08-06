<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodevalue
 *
 * @ORM\Table(name="sys_nodevalue")
 * @ORM\Entity
 */
class SysNodevalue
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
     * @var integer
     *
     * @ORM\Column(name="nodesource", type="integer", nullable=true)
     */
    private $nodesource;

    /**
     * @var string
     *
     * @ORM\Column(name="nodevalue", type="string", length=255, nullable=true)
     */
    private $nodevalue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="calc", type="boolean", nullable=true)
     */
    private $calc;

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

