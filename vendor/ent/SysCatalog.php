<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysCatalog
 *
 * @ORM\Table(name="sys_catalog")
 * @ORM\Entity
 */
class SysCatalog
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
     * @ORM\Column(name="label", type="string", length=75, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="req", type="text", length=65535, nullable=true)
     */
    private $req;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=255, nullable=true)
     */
    private $mask;

    /**
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=64, nullable=true)
     */
    private $tab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="contfield", type="string", length=64, nullable=true)
     */
    private $contfield;

    /**
     * @var string
     *
     * @ORM\Column(name="titlefield", type="string", length=64, nullable=true)
     */
    private $titlefield;

    /**
     * @var string
     *
     * @ORM\Column(name="keyfield", type="string", length=64, nullable=true)
     */
    private $keyfield;

    /**
     * @var string
     *
     * @ORM\Column(name="descfield", type="string", length=64, nullable=true)
     */
    private $descfield;

    /**
     * @var string
     *
     * @ORM\Column(name="h1field", type="string", length=64, nullable=true)
     */
    private $h1field;

    /**
     * @var string
     *
     * @ORM\Column(name="phpfile", type="string", length=64, nullable=true)
     */
    private $phpfile;

    /**
     * @var string
     *
     * @ORM\Column(name="phpcode", type="text", length=65535, nullable=true)
     */
    private $phpcode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comments", type="boolean", nullable=true)
     */
    private $comments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="slash", type="boolean", nullable=true)
     */
    private $slash;


}

