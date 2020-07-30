<?php

namespace App\Resolvers;

use App\PaymentPlatform;
use function GuzzleHttp\Psr7\str;

class PaymentPlatformResolver
{
    protected $paymentPlatforms;

    /**
     * PaymentPlatformResolver constructor.
     */
    public function __construct()
    {
        $this->paymentPlatforms = PaymentPlatform::all();
    }

    public function resolveService($paymentPlatformId)
    {
        $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

        $service = config("services.{$name}.class");

        if ($service) {
            return resolve($service);
        }

        throw new \Exception('The selected payment platform is not in the configuration');
    }


}
