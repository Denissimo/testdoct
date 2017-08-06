<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysCfg
 *
 * @ORM\Table(name="sys_cfg")
 * @ORM\Entity
 */
class SysCfg
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
     * @ORM\Column(name="category", type="string", length=16, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="numtype", type="string", length=255, nullable=true)
     */
    private $numtype;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=255, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", length=65535, nullable=true)
     */
    private $descr;


}

