<?php
declare(strict_types=1);

namespace Src\SimpleFactory;

class AppMessenger
{
    private $sender;
    private $message;

    public function toEmail()
    {
        echo 'to email' . PHP_EOL;
    }

    public function toSms()
    {
        echo 'to sms' . PHP_EOL;
    }

    public function setSender($sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function setMessage($message): self
    {
        $this->message = $message;
        return $this;
    }
}