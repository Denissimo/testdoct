<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysJoincont
 *
 * @ORM\Table(name="sys_joincont")
 * @ORM\Entity
 */
class SysJoincont
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
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

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
     * @ORM\Column(name="joinfield", type="string", length=64, nullable=true)
     */
    private $joinfield;

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
     * @ORM\Column(name="tabfield", type="string", length=64, nullable=true)
     */
    private $tabfield;

    /**
     * @var string
     *
     * @ORM\Column(name="conttab", type="string", length=64, nullable=true)
     */
    private $conttab;

    /**
     * @var string
     *
     * @ORM\Column(name="req", type="text", length=65535, nullable=true)
     */
    private $req;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slash", type="boolean", nullable=true)
     */
    private $slash;


}

