<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysJoinlabs
 *
 * @ORM\Table(name="sys_joinlabs")
 * @ORM\Entity
 */
class SysJoinlabs
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
     * @ORM\Column(name="form", type="string", length=255, nullable=true)
     */
    private $form;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;


}

