<?php namespace Kaankilic\WTFilter\Tests;

use Mockery;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * Class TestCase
 *
 * @package Tests
 */
abstract class TestCase extends Orchestra
{

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

//        $this->beforeApplicationDestroyed(function () use ($realpath) {
//            $this->artisan('migrate:rollback', $realpath);
//        });
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        //        // reset base path to point to our package's src directory
        //        $app['path.base'] = __DIR__ . '/../src';
        //
        // set up database configuration
    }

    /**
     * Get Sluggable package providers.
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Kaankilic\WTFilter\Providers\WTFilterServiceProvider::class
        ];
    }

    /**
     * Mock the event dispatcher so all events are silenced and collected.
     *
     * @return $this
     */
    protected function withoutEvents()
    {
        $mock = Mockery::mock('Illuminate\Contracts\Events\Dispatcher');

        $mock->shouldReceive('fire', 'until');

        $this->app->instance('events', $mock);

        return $this;
    }
}