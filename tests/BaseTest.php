<?php

namespace NathanJms\BlogPackage\Tests;

use NathanJms\BlogPackage\BlogPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->loadLaravelMigrations(['--database' => 'testbench']);
        $this->artisan('migrate', ['--database' => 'testbench'])->run();
    }

    protected function getPackageProviders($app)
    {
        return [
            BlogPackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
