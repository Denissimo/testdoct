<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DataRequestHistory
 *
 * @ORM\Table(name="data_request_history", indexes={@ORM\Index(name="FK_HIST_NEW_STATUS_idx", columns={"status_new"}), @ORM\Index(name="FK_HIST_OLD_STATUS_idx", columns={"status_old"}), @ORM\Index(name="FK_REQ_ID", columns={"id"}), @ORM\Index(name="FK_REQUEST_USER_idx", columns={"username"})})
 * @ORM\Entity
 */
class DataRequestHistory
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
     * @ORM\Column(name="status_old", type="string", length=45, nullable=true)
     */
    private $statusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="status_new", type="string", length=45, nullable=true)
     */
    private $statusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;


}

