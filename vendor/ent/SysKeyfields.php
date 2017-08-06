<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysKeyfields
 *
 * @ORM\Table(name="sys_keyfields")
 * @ORM\Entity
 */
class SysKeyfields
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
     * @ORM\Column(name="tab", type="string", length=75, nullable=true)
     */
    private $tab;

    /**
     * @var string
     *
     * @ORM\Column(name="keyfield", type="string", length=75, nullable=true)
     */
    private $keyfield;


}

