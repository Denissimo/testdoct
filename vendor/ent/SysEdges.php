<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysEdges
 *
 * @ORM\Table(name="sys_edges")
 * @ORM\Entity
 */
class SysEdges
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
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="source", type="integer", nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="destination", type="integer", nullable=true)
     */
    private $destination;


}

