<?php

namespace Models\SysUrls;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysUrls
 *
 * @ORM\Table(name="sys_urls")
 * @ORM\Entity
 */
class SysUrls
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
     * @ORM\Column(name="phpfile", type="string", length=75, nullable=true)
     */
    private $phpfile;

    /**
     * @var string
     *
     * @ORM\Column(name="scrip", type="string", length=75, nullable=true)
     */
    private $scrip;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=75, nullable=true)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=64, nullable=true)
     */
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="independ", type="boolean", nullable=true)
     */
    private $independ;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="h1", type="string", length=255, nullable=true)
     */
    private $h1;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="string", length=75, nullable=true)
     */
    private $menu;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", length=65535, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="noindex", type="boolean", nullable=true)
     */
    private $noindex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="access", type="boolean", nullable=true)
     */
    private $access;

    /**
     * @var boolean
     *
     * @ORM\Column(name="virtual", type="boolean", nullable=true)
     */
    private $virtual;

    /**
     * @var string
     *
     * @ORM\Column(name="header", type="text", length=65535, nullable=true)
     */
    private $header;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comments", type="boolean", nullable=true)
     */
    private $comments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slash", type="boolean", nullable=true)
     */
    private $slash;


}
