<?php
/**
 * HelloWorld class
 *
 * @package  ShahariaAzam\GitHubActions\ForPHP
 */


namespace ShahariaAzam\HelloWorld;

/**
 * Class HelloWorld
 * @package ShahariaAzam\HelloWorld
 */
class HelloWorld
{
    /**
     * @var string
     */
    private $yourName;

    public function __construct($yourName)
    {
        $this->yourName = $yourName;
    }

    /**
     * @return string
     */
    public function greet()
    {
        return sprintf("Hello world from " . $this->yourName);
    }
}