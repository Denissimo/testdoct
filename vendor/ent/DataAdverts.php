<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataAdverts
 *
 * @ORM\Table(name="data_adverts")
 * @ORM\Entity
 */
class DataAdverts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=64, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=64, nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="advert_descr", type="string", length=255, nullable=true)
     */
    private $advertDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_descr", type="string", length=255, nullable=true)
     */
    private $bannerDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="content_descr", type="string", length=255, nullable=true)
     */
    private $contentDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_label1", type="string", length=64, nullable=true)
     */
    private $customLabel1;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_label2", type="string", length=64, nullable=true)
     */
    private $customLabel2;


}

