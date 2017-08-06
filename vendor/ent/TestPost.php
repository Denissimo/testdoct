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
    private $datetime = 'CURRENT_TIMESTAMP';


}

