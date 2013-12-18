<?php
namespace Victoire\ButtonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\CmsBundle\Entity\Widget;

/**
 * WidgetButton
 *
 * @ORM\Table("cms_widget_button")
 * @ORM\Entity
 */
class WidgetButton extends Widget
{
    use \Victoire\CmsBundle\Entity\Traits\WidgetTrait;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=55)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=10)
     */
    private $target;

    /**
     * @var string tiny|small|default|large
     *
     *
     * @ORM\Column(name="size", type="string", length=10)
     */
    private $size;

    /**
     * @var string default|warning|info|success|primary|danger
     *
     * @ORM\Column(name="style", type="string", length=10)
     */
    private $style;

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set target
     *
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set style
     *
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set size
     *
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

}