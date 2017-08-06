<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataClients
 *
 * @ORM\Table(name="data_clients", uniqueConstraints={@ORM\UniqueConstraint(name="phone_UNIQUE", columns={"phone"})})
 * @ORM\Entity
 */
class DataClients
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
     * @ORM\Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_name", type="string", length=45, nullable=false)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=false)
     */
    private $sex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="pob", type="string", length=255, nullable=true)
     */
    private $pob;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="citizen", type="string", length=45, nullable=true)
     */
    private $citizen;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_serial", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $passportSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_number", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $passportNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passport_date", type="date", nullable=true)
     */
    private $passportDate;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_taken", type="string", length=255, nullable=false)
     */
    private $passportTaken;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_code", type="string", length=7, nullable=true)
     */
    private $passportCode;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_register", type="string", length=255, nullable=true)
     */
    private $adressRegister;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_living", type="string", length=255, nullable=true)
     */
    private $adressLiving;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;


}

