<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TtAcctypes
 *
 * @ORM\Table(name="tt_acctypes")
 * @ORM\Entity
 */
class TtAcctypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="acc_id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accId;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false)
     */
    private $rowId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="acc_nam", type="string", length=64, nullable=true)
     */
    private $accNam;

    /**
     * @var string
     *
     * @ORM\Column(name="acc_role", type="string", length=64, nullable=true)
     */
    private $accRole;


}

