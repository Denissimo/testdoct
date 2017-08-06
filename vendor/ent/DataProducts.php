<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataProducts
 *
 * @ORM\Table(name="data_products")
 * @ORM\Entity
 */
class DataProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="prodname", type="string", length=255, nullable=true)
     */
    private $prodname;


}

