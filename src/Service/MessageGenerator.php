<?php

namespace App\Service;

class MessageGenerator
{

    public function getHappyMessage(): string
    {
        $message = [
            'Great work Keep this up',
            'You have really worked hard on this and it shows',
            'This is just a masterpiece'
        ];
        $index = array_rand($message);

        return $message[$index];
    }
}
