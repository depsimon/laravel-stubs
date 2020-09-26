<?php

namespace Depsimon\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Depsimon\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
