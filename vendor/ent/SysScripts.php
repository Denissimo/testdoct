<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysScripts
 *
 * @ORM\Table(name="sys_scripts")
 * @ORM\Entity
 */
class SysScripts
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
     * @ORM\Column(name="scriptype", type="string", length=4, nullable=false)
     */
    private $scriptype;

    /**
     * @var string
     *
     * @ORM\Column(name="scrip", type="text", length=65535, nullable=true)
     */
    private $scrip;


}

