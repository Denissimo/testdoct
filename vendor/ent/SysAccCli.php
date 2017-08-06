<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysAccCli
 *
 * @ORM\Table(name="sys_acc_cli")
 * @ORM\Entity
 */
class SysAccCli
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_acl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcl;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=16, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="acclabs", type="string", length=64, nullable=true)
     */
    private $acclabs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="granted", type="boolean", nullable=true)
     */
    private $granted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="acl_datetime", type="datetime", nullable=false)
     */
    private $aclDatetime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}

