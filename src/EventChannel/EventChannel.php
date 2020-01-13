<?php
declare(strict_types=1);

namespace Src\EventChannel;

class EventChannel implements EventChannelInterface
{
    private $topics;

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
        echo $subscriber->getName() . ' subscribet on ' . $topic . PHP_EOL;
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /** @var SubscriberInterface $subscriber */
            $subscriber->notify($data);
        }
    }
}