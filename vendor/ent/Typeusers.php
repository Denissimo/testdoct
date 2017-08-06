<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Typeusers
 *
 * @ORM\Table(name="typeusers")
 * @ORM\Entity
 */
class Typeusers
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
     * @ORM\Column(name="typeuser", type="string", length=64, nullable=true)
     */
    private $typeuser;


}

