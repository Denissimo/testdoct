<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TtCurr
 *
 * @ORM\Table(name="tt_curr")
 * @ORM\Entity
 */
class TtCurr
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
     * @ORM\Column(name="lett", type="string", length=10, nullable=true)
     */
    private $lett;

    /**
     * @var integer
     *
     * @ORM\Column(name="digit", type="smallint", nullable=true)
     */
    private $digit;

    /**
     * @var string
     *
     * @ORM\Column(name="rank", type="string", length=10, nullable=true)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="okv", type="string", length=255, nullable=true)
     */
    private $okv;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=255, nullable=true)
     */
    private $iso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="incdate", type="date", nullable=true)
     */
    private $incdate;


}

