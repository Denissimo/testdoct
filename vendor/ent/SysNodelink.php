<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysNodelink
 *
 * @ORM\Table(name="sys_nodelink")
 * @ORM\Entity
 */
class SysNodelink
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
     * @var integer
     *
     * @ORM\Column(name="nodesource", type="integer", nullable=true)
     */
    private $nodesource;

    /**
     * @var string
     *
     * @ORM\Column(name="methodname", type="string", length=64, nullable=true)
     */
    private $methodname;

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

