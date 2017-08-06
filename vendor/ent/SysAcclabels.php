<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysAcclabels
 *
 * @ORM\Table(name="sys_acclabels")
 * @ORM\Entity
 */
class SysAcclabels
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
     * @ORM\Column(name="acclab", type="string", length=64, nullable=true)
     */
    private $acclab;

    /**
     * @var string
     *
     * @ORM\Column(name="chpulab", type="string", length=75, nullable=true)
     */
    private $chpulab;


}

