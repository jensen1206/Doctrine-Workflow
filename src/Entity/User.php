<?php


namespace ArtPicture\ORM\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @package ArtPicture\ORM\Entity
 * @ORM\Entity
 */
class User
{
    use IdTrait;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    protected string $username;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $password;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $email;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="CardProducts", mappedBy="user")
     * @ORM\JoinTable(name="cart",
     *  joinColumns={@ORM\JoinColumn(name="user_id",referencedColumnName="id")}
     * )
     */
    protected Collection $cardProducts;

    /**
     * @return Collection
     */
    public function getCardProducts(): Collection
    {
        return $this->cardProducts;
    }

    /**
     * @param Collection $cardProducts
     */
    public function setCardProducts(Collection $cardProducts): void
    {
        $this->cardProducts = $cardProducts;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }




}