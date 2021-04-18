<?php


namespace ArtPicture\ORM\Entity;


use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}