<?php

namespace App\Services\Package;
use App\Services\Package\Delivery\InTimeApiService;
use App\Services\Package\Delivery\NovaPoshtaApiService;
use App\Services\Package\Delivery\UkrPoshtaApiService;

class PackageService
{
    public function create(array $data): array
    {
        return [
            (new PackageHandlerService(new InTimeApiService()))->send($data['sender'], $data['recipient'], $data['data']),
            (new PackageHandlerService(new NovaPoshtaApiService()))->send($data['sender'], $data['recipient'], $data['data']),
            (new PackageHandlerService(new UkrPoshtaApiService()))->send($data['sender'], $data['recipient'], $data['data']),
        ];
    }
}
