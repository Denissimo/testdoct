<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataUserGroup
 *
 * @ORM\Table(name="data_user_group")
 * @ORM\Entity
 */
class DataUserGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=false)
     */
    private $createTime = 'CURRENT_TIMESTAMP';


}

