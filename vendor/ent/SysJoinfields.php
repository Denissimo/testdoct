<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysJoinfields
 *
 * @ORM\Table(name="sys_joinfields")
 * @ORM\Entity
 */
class SysJoinfields
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
     * @var integer
     *
     * @ORM\Column(name="joincont_id", type="integer", nullable=false)
     */
    private $joincontId;

    /**
     * @var string
     *
     * @ORM\Column(name="table", type="string", length=64, nullable=true)
     */
    private $table;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=64, nullable=true)
     */
    private $field;


}

