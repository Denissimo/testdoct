<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysDatacheck
 *
 * @ORM\Table(name="sys_datacheck")
 * @ORM\Entity
 */
class SysDatacheck
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
     * @ORM\Column(name="formname", type="string", length=255, nullable=true)
     */
    private $formname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stage", type="boolean", nullable=true)
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=75, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="type1", type="string", length=16, nullable=true)
     */
    private $type1;

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=32, nullable=true)
     */
    private $var;

    /**
     * @var integer
     *
     * @ORM\Column(name="kind", type="integer", nullable=true)
     */
    private $kind;

    /**
     * @var string
     *
     * @ORM\Column(name="type2", type="string", length=16, nullable=true)
     */
    private $type2;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=32, nullable=true)
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="typecheck", type="string", length=16, nullable=true)
     */
    private $typecheck;

    /**
     * @var string
     *
     * @ORM\Column(name="succ", type="string", length=16, nullable=true)
     */
    private $succ;

    /**
     * @var string
     *
     * @ORM\Column(name="fail", type="string", length=16, nullable=true)
     */
    private $fail;

    /**
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=16, nullable=true)
     */
    private $tab;

    /**
     * @var string
     *
     * @ORM\Column(name="errmsg", type="text", length=65535, nullable=true)
     */
    private $errmsg;

    /**
     * @var string
     *
     * @ORM\Column(name="tplmsg", type="string", length=64, nullable=true)
     */
    private $tplmsg;


}

