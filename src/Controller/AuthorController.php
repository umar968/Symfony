<?php

namespace App\Controller;

use App\Entity\Author;
use phpDocumentor\Reflection\Types\AbstractList;
use PHPUnit\Util\Xml\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route('/author',name="author_route")
     */
    public function author(ValidatorInterface $validator)
    {
        $author = new Author();
        $author->setName('');
        $errors = $validator->validate($author);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new Response($errorsString);
        }
        return new Response('Author is valid');
    }
}
