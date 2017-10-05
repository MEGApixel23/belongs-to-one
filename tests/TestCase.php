<?php

use Orchestra\Testbench\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TestCase extends BaseTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->migrate()->init();
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'test');
        $app['config']->set('database.connections.test', [
            'driver'   => 'sqlite',
            'database' => ':memory:'
        ]);
    }

    protected function init()
    {
        $this->withFactories(__DIR__ . '/factories');
    }

    private function migrate()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('group_record', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('record_id');
            $table->unsignedInteger('group_id');
            $table->timestamps();
        });

        return $this;
    }
}
