<?php

namespace Src\SimpleFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$factory = new SimpleFactory();
$messenger = $factory->build('sms');