<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysContent
 *
 * @ORM\Table(name="sys_content")
 * @ORM\Entity
 */
class SysContent
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
     * @ORM\Column(name="label", type="string", length=75, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=75, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;


}

