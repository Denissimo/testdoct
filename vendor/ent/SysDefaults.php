<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysDefaults
 *
 * @ORM\Table(name="sys_defaults")
 * @ORM\Entity
 */
class SysDefaults
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
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="varclass", type="string", length=32, nullable=true)
     */
    private $varclass;

    /**
     * @var string
     *
     * @ORM\Column(name="varname", type="string", length=32, nullable=true)
     */
    private $varname;

    /**
     * @var string
     *
     * @ORM\Column(name="varindex", type="string", length=255, nullable=true)
     */
    private $varindex;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="separator", type="string", length=1, nullable=true)
     */
    private $separator;


}

