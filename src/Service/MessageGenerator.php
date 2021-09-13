<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class MessageGenerator
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getHappyMessage(): string
    {
        $message = [
            'Great work Keep this up',
            'You have really worked hard on this and it shows',
            'This is just a masterpiece'
        ];
        $index = array_rand($message);
        $this->logger->info($message[$index]);

        return $message[$index];
    }
}
