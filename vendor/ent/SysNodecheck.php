<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodecheck
 *
 * @ORM\Table(name="sys_nodecheck")
 * @ORM\Entity
 */
class SysNodecheck
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
     * @ORM\Column(name="type", type="string", length=16, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="node1", type="integer", nullable=true)
     */
    private $node1;

    /**
     * @var integer
     *
     * @ORM\Column(name="node2", type="integer", nullable=true)
     */
    private $node2;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

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

