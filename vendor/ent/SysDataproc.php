<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysDataproc
 *
 * @ORM\Table(name="sys_dataproc")
 * @ORM\Entity
 */
class SysDataproc
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
     * @ORM\Column(name="restype", type="string", length=16, nullable=true)
     */
    private $restype;

    /**
     * @var string
     *
     * @ORM\Column(name="resvar", type="string", length=255, nullable=true)
     */
    private $resvar;

    /**
     * @var string
     *
     * @ORM\Column(name="resparam", type="string", length=255, nullable=true)
     */
    private $resparam;

    /**
     * @var string
     *
     * @ORM\Column(name="type1", type="string", length=16, nullable=true)
     */
    private $type1;

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=255, nullable=true)
     */
    private $var;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=true)
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="instance", type="string", length=255, nullable=true)
     */
    private $instance;

    /**
     * @var string
     *
     * @ORM\Column(name="prockind", type="string", length=255, nullable=true)
     */
    private $prockind;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;


}

