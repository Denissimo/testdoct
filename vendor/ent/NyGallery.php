<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NyGallery
 *
 * @ORM\Table(name="ny_gallery")
 * @ORM\Entity
 */
class NyGallery
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
     * @ORM\Column(name="sortindex", type="integer", nullable=true)
     */
    private $sortindex;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;


}

