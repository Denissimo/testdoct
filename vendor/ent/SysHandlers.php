<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysHandlers
 *
 * @ORM\Table(name="sys_handlers")
 * @ORM\Entity
 */
class SysHandlers
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
     * @ORM\Column(name="handname", type="string", length=64, nullable=true)
     */
    private $handname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sizex", type="boolean", nullable=true)
     */
    private $sizex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sizey", type="boolean", nullable=true)
     */
    private $sizey;


}

