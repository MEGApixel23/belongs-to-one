<?php

use Illuminate\Foundation\Testing\TestCase;

class DemoTest extends TestCase
{
    /**
     * Boots the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = new Illuminate\Foundation\Application(
            realpath(__DIR__ . '/../')
        );
        return $app;
    }


    public function testTest()
    {
        return $inputCsv = new \Megapixel23\Database\Eloquent\Relations\BelongsToOne();
    }
}