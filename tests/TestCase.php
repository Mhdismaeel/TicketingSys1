<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use phpDocumentor\Reflection\Types\Void_;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

     public function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }
}
