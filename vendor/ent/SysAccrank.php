<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysAccrank
 *
 * @ORM\Table(name="sys_accrank")
 * @ORM\Entity
 */
class SysAccrank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_acp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcp;

    /**
     * @var string
     *
     * @ORM\Column(name="acclabel", type="string", length=64, nullable=true)
     */
    private $acclabel;

    /**
     * @var string
     *
     * @ORM\Column(name="accname", type="string", length=64, nullable=true)
     */
    private $accname;


}

