<?php

namespace App\Services\Package;

use App\Interfaces\Package\DeliveryApiInterface;

class PackageHandlerService implements DeliveryApiInterface
{
    private DeliveryApiInterface $deliveryApi;

    public function __construct(DeliveryApiInterface $deliveryApi)
    {
        $this->deliveryApi = $deliveryApi;
    }

    public function send(string $sender, string $recipient, array $data): string
    {
        return $this->deliveryApi->send($sender, $recipient, $data);
    }
}
