<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataUserHistory
 *
 * @ORM\Table(name="data_user_history", indexes={@ORM\Index(name="FK_USER_HISTORY_idx", columns={"username"})})
 * @ORM\Entity
 */
class DataUserHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=false)
     */
    private $createTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     */
    private $action;

    /**
     * @var \DataUser
     *
     * @ORM\ManyToOne(targetEntity="DataUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="username", referencedColumnName="username")
     * })
     */
    private $username;


}

