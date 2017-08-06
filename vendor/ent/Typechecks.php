<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Typechecks
 *
 * @ORM\Table(name="typechecks")
 * @ORM\Entity
 */
class Typechecks
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
     * @ORM\Column(name="typecheck", type="string", length=16, nullable=true)
     */
    private $typecheck;

    /**
     * @var string
     *
     * @ORM\Column(name="exec", type="text", length=65535, nullable=true)
     */
    private $exec;


}

