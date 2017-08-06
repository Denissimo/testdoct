<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodeaction
 *
 * @ORM\Table(name="sys_nodeaction")
 * @ORM\Entity
 */
class SysNodeaction
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
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=255, nullable=true)
     */
    private $tab;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=255, nullable=true)
     */
    private $field;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodesource", type="integer", nullable=true)
     */
    private $nodesource;

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

