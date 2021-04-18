<?php


namespace ArtPicture\ORM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @package ArtPicture\ORM\Entity
 * @ORM\Entity
 */
class Category
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;
    use CreatedTrait;

}