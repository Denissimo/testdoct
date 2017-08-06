<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysTemps
 *
 * @ORM\Table(name="sys_temps")
 * @ORM\Entity
 */
class SysTemps
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
     * @ORM\Column(name="temp", type="text", length=16777215, nullable=true)
     */
    private $temp;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="temptype", type="string", length=16, nullable=true)
     */
    private $temptype;

    /**
     * @var string
     *
     * @ORM\Column(name="chpulab", type="string", length=64, nullable=true)
     */
    private $chpulab;

    /**
     * @var string
     *
     * @ORM\Column(name="activeclass", type="string", length=64, nullable=true)
     */
    private $activeclass;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=64, nullable=true)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="marker", type="string", length=64, nullable=true)
     */
    private $marker;

    /**
     * @var string
     *
     * @ORM\Column(name="marktype", type="string", length=64, nullable=true)
     */
    private $marktype;

    /**
     * @var string
     *
     * @ORM\Column(name="markindex", type="string", length=64, nullable=true)
     */
    private $markindex;

    /**
     * @var string
     *
     * @ORM\Column(name="markterm", type="string", length=16, nullable=true)
     */
    private $markterm;


}

