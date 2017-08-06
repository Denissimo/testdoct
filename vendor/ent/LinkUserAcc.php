<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LinkUserAcc
 *
 * @ORM\Table(name="link_user_acc")
 * @ORM\Entity
 */
class LinkUserAcc
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="access_id", type="integer", nullable=true)
     */
    private $accessId;


}

