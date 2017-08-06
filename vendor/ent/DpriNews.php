<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DpriNews
 *
 * @ORM\Table(name="dpri_news")
 * @ORM\Entity
 */
class DpriNews
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
     * @ORM\Column(name="listhead", type="text", length=255, nullable=true)
     */
    private $listhead;

    /**
     * @var string
     *
     * @ORM\Column(name="listimage", type="text", length=255, nullable=true)
     */
    private $listimage;

    /**
     * @var string
     *
     * @ORM\Column(name="listtext", type="text", length=16777215, nullable=true)
     */
    private $listtext;

    /**
     * @var string
     *
     * @ORM\Column(name="newshead", type="text", length=255, nullable=true)
     */
    private $newshead;

    /**
     * @var string
     *
     * @ORM\Column(name="newsimage", type="text", length=65535, nullable=true)
     */
    private $newsimage;

    /**
     * @var string
     *
     * @ORM\Column(name="newstext", type="text", length=16777215, nullable=true)
     */
    private $newstext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime = 'CURRENT_TIMESTAMP';


}

