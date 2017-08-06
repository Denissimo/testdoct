<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysForms
 *
 * @ORM\Table(name="sys_forms")
 * @ORM\Entity
 */
class SysForms
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
     * @ORM\Column(name="nam", type="string", length=255, nullable=true)
     */
    private $nam;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=255, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="forms", type="text", length=65535, nullable=true)
     */
    private $forms;

    /**
     * @var string
     *
     * @ORM\Column(name="act", type="string", length=16, nullable=true)
     */
    private $act;

    /**
     * @var string
     *
     * @ORM\Column(name="okmess", type="text", length=65535, nullable=true)
     */
    private $okmess;

    /**
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=16, nullable=true)
     */
    private $tab;

    /**
     * @var string
     *
     * @ORM\Column(name="comeback", type="string", length=64, nullable=true)
     */
    private $comeback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="source", type="boolean", nullable=true)
     */
    private $source;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anchor", type="boolean", nullable=true)
     */
    private $anchor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sesslab", type="boolean", nullable=true)
     */
    private $sesslab;


}

