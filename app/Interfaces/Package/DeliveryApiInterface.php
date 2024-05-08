<?php

namespace App\Interfaces\Package;

interface DeliveryApiInterface
{
    public function send(string $sender, string $recipient, array $data): string;
}
