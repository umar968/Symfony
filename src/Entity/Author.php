<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Author
{
    /**
     * @Assert\NotBlank
     * @Assert\length(min=3)
     */
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}
