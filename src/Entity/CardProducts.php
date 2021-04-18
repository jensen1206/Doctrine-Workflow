<?php


namespace ArtPicture\ORM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CardProducts
 * @package ArtPicture\ORM\Entity
 * @ORM\Entity
 * @ORM\Table(name="cart")
 */
class CardProducts
{
    use IdTrait;
    use CreatedTrait;


    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    protected string $quantity;

    /**
     * @var Product
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected Product $product;


    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected User $user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }


    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }
}