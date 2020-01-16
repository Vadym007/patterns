<?php
declare(strict_types=1);

namespace Src\SimpleFactory;

class SimpleFactory
{
    public  function build(string $type = 'email'): AppMessenger
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'test@gmail.com';
                break;
            case 'sms':
                $messenger->toSms();
                $sender = '0687235943';
                break;
            default:
                throw new \InvalidArgumentException('Incorrect message type');
        }

        $messenger
            ->setSender($sender)
            ->setMessage('Default message');

        return $messenger;

    }
}