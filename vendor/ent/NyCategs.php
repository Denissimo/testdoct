<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NyCategs
 *
 * @ORM\Table(name="ny_categs")
 * @ORM\Entity
 */
class NyCategs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="c_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cId;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=64, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;


}

