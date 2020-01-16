<?php

namespace Src\StaticFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$messenger = StaticFactory::build('sms');