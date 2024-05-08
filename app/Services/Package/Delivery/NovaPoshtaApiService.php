<?php

namespace App\Services\Package\Delivery;

use App\Interfaces\Package\DeliveryApiInterface;

class NovaPoshtaApiService implements DeliveryApiInterface
{
    public function send(string $sender, string $recipient, array $data): string
    {
        return "Sent to NovaPoshta";
    }
}
