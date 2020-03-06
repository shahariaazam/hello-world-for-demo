<?php

namespace ShahariaAzam\GitHubActions\ForPHP\Test;

use PHPUnit\Framework\TestCase;
use ShahariaAzam\HelloWorld\HelloWorld;

class HelloWorldTest extends TestCase
{
    private $name;

    public function setUp(): void
    {
        $this->name = "John Doe";

        parent::setUp();
    }

    /**
     * Test HelloWorld->greet()
     */
    public function testGreet()
    {
        $helloWorld = new HelloWorld($this->name);
        $this->assertEquals("Hello world from " . $this->name, $helloWorld->greet());
    }
}
