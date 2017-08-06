<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysUsers
 *
 * @ORM\Table(name="sys_users")
 * @ORM\Entity
 */
class SysUsers
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
     * @ORM\Column(name="rfid", type="string", length=19, nullable=true)
     */
    private $rfid;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=19, nullable=true)
     */
    private $account;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typeuser", type="boolean", nullable=true)
     */
    private $typeuser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="color", type="boolean", nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=256, nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=32, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=32, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=32, nullable=true)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=64, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=16, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=32, nullable=true)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=32, nullable=true)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var integer
     *
     * @ORM\Column(name="balance", type="integer", nullable=true)
     */
    private $balance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime = 'CURRENT_TIMESTAMP';


}

