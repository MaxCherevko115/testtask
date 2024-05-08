<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Requests\Package\PackageRequest;
use App\Services\Package\PackageService;
use Illuminate\Http\JsonResponse;

class PackagesController extends Controller
{
    public function create(PackageRequest $packageRequest, PackageService $packageService): JsonResponse
    {
        $result = $packageService->create($packageRequest->all());

        return new JsonResponse(['message' => $result]);
    }
}
