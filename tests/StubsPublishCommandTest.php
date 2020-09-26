<?php

namespace Depsimon\Stubs\Tests;

use Illuminate\Support\Facades\File;

class StubsPublishCommandTest extends TestCase
{
    /** @test */
    public function it_can_publish_stubs()
    {
        $targetStubsPath = $this->app->basePath('stubs');

        File::deleteDirectory($targetStubsPath);

        $this->artisan('depsimon-stubs:publish')->assertExitCode(0);

        $stubPath = __DIR__ . '/../stubs/migration.stub';

        $publishedStubPath = $targetStubsPath . '/migration.stub';

        $this->assertFileEquals($stubPath, $publishedStubPath);
    }
}
