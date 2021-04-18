<?php


namespace ArtPicture\ORM\Entity;


use Doctrine\ORM\Mapping as ORM;

trait CreatedTrait
{
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     *
     */
    protected \DateTime $created;

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }
}