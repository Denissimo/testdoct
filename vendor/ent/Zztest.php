<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Zztest
 *
 * @ORM\Table(name="zztest")
 * @ORM\Entity
 */
class Zztest
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
     * @ORM\Column(name="test1", type="string", length=64, nullable=true)
     */
    private $test1;

    /**
     * @var string
     *
     * @ORM\Column(name="test2", type="string", length=64, nullable=true)
     */
    private $test2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="testint", type="boolean", nullable=true)
     */
    private $testint;


}

