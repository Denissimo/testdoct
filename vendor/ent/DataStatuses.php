<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataStatuses
 *
 * @ORM\Table(name="data_statuses")
 * @ORM\Entity
 */
class DataStatuses
{
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


}

