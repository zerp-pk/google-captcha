<?php

namespace Zerp\GoogleCaptcha\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\GoogleCaptcha\Providers\GoogleCaptchaServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [GoogleCaptchaServiceProvider::class];
    }
}
