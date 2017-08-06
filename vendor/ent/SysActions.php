<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysActions
 *
 * @ORM\Table(name="sys_actions")
 * @ORM\Entity
 */
class SysActions
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
     * @var boolean
     *
     * @ORM\Column(name="stageup", type="boolean", nullable=true)
     */
    private $stageup;

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=32, nullable=true)
     */
    private $var;

    /**
     * @var string
     *
     * @ORM\Column(name="act", type="string", length=8, nullable=true)
     */
    private $act;

    /**
     * @var string
     *
     * @ORM\Column(name="type1", type="string", length=16, nullable=true)
     */
    private $type1;

    /**
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=64, nullable=true)
     */
    private $tab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="source", type="boolean", nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="req", type="text", length=65535, nullable=true)
     */
    private $req;

    /**
     * @var string
     *
     * @ORM\Column(name="phpcode", type="string", length=64, nullable=true)
     */
    private $phpcode;

    /**
     * @var string
     *
     * @ORM\Column(name="okmess", type="text", length=65535, nullable=true)
     */
    private $okmess;

    /**
     * @var string
     *
     * @ORM\Column(name="tplmsg", type="string", length=64, nullable=true)
     */
    private $tplmsg;


}

