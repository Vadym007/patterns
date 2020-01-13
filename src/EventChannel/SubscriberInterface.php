<?php

namespace Src\EventChannel;

interface SubscriberInterface
{
    public function getName(): string;

    public  function notify($data);
}