<?php


namespace ArtPicture\ORM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package ArtPicture\ORM\Entity
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;

    /**
     * @var float
     * @ORM\Column(type="float",nullable=false)
     */
    protected float $price;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}