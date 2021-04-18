<?php


namespace ArtPicture\ORM\Entity;


use Doctrine\ORM\Mapping as ORM;

trait DescriptionTrait
{

    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    protected string $description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}