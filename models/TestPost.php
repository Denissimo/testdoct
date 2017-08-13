<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TestPost
 *
 * @ORM\Table(name="test_post")
 * @ORM\Entity
 */
class TestPost
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
     * @ORM\Column(name="testedit", type="string", length=64, nullable=true)
     */
    private $testedit;

    /**
     * @var string
     *
     * @ORM\Column(name="testhid", type="string", length=64, nullable=true)
     */
    private $testhid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;

    /**
     * @return int
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     * @param int $rowId
     */
    public function setRowId($rowId)
    {
        $this->rowId = $rowId;
    }

    /**
     * @return string
     */
    public function getTestedit()
    {
        return $this->testedit;
    }

    /**
     * @param string $testedit
     */
    public function setTestedit($testedit)
    {
        $this->testedit = $testedit;
    }

    /**
     * @return string
     */
    public function getTesthid()
    {
        return $this->testhid;
    }

    /**
     * @param string $testhid
     */
    public function setTesthid($testhid)
    {
        $this->testhid = $testhid;
    }

    /**
     * @return DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param DateTime $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }



}
