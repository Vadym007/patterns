<?php
declare(strict_types=1);

namespace Src\EventChannel;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct(string  $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function notify($data)
    {
        echo $data . PHP_EOL;
    }
}