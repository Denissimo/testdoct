<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataUser
 *
 * @ORM\Table(name="data_user", indexes={@ORM\Index(name="FK_USER_GROUP_idx", columns={"group"})})
 * @ORM\Entity
 */
class DataUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=false)
     */
    private $createTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="session", type="string", length=45, nullable=true)
     */
    private $session;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var \DataUserGroup
     *
     * @ORM\ManyToOne(targetEntity="DataUserGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group", referencedColumnName="group")
     * })
     */
    private $group;


}

