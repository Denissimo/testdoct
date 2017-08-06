<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataCountries
 *
 * @ORM\Table(name="data_countries")
 * @ORM\Entity
 */
class DataCountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;


}

