<?php

namespace Src\EventChannel;

interface PublisherInterface
{
    public function publish($data);
}