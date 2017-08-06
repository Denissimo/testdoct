<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SysComments
 *
 * @ORM\Table(name="sys_comments")
 * @ORM\Entity
 */
class SysComments
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
     * @ORM\Column(name="cur_label", type="string", length=64, nullable=true)
     */
    private $curLabel;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="string", length=256, nullable=true)
     */
    private $params;

    /**
     * @var integer
     *
     * @ORM\Column(name="author", type="integer", nullable=false)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="touser", type="integer", nullable=true)
     */
    private $touser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upic", type="boolean", nullable=true)
     */
    private $upic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="headmes", type="text", length=65535, nullable=true)
     */
    private $headmes;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime = 'CURRENT_TIMESTAMP';


}

