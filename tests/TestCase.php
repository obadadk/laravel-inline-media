<?php

namespace Obadadk\InlineMedia\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Obadadk\InlineMedia\InlineMediaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Obadadk\\InlineMedia\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            InlineMediaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-inline-media_table.php.stub';
        $migration->up();
        */
    }
}
