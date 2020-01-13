<?php
declare(strict_types=1);

namespace Src\EventChannel;

class Publisher implements PublisherInterface
{
    private $topic;
    private $eventChannel;

    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}