<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  HelloHandle
 * @package   HelloUniverse
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */
namespace src\DemoSpace\HelloUniverse;

use TTI\AbstractFactory\HandleAbstraction;

/**
 * HelloHandle responsibility is to handle session.
 *
 * @category HelloHandle
 * @package  HelloUniverse
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://www.breezeframework.com/thetrollinception.php
 */
class HelloHandle extends HandleAbstraction
{
    /**
     *
     * @var object $roar 
     */
    protected $roar;
    
    /**
     * Constructor
     * 
     * @param object $roar Dependency injector and container
     */
    public function __construct($roar)
    {
        $this->roar = $roar;
    }
    
    /**
     * Cloner
     * 
     * @return void
     */
    public function __clone()
    {
    }      

    /**
     * First Hello World
     * 
     * @return void;
     */
    public function hello()
    {
        echo "Hello World!";
    }    
    
    /**
     * First Hello World, with name
     * 
     * @param string $params Params sent to the method
     * 
     * @return \src\DemoSpace\HelloUniverse\RequestHandle
     */
    public function index($params)
    {   
        echo "Hello my name is ".$params['name']."!";
    }        
    
    /**
     * Set key/value in session.
     *
     * @param mixed $key   Key of the array
     * @param mixed $value Value to assign
     * 
     * @return \src\DemoSpace\HelloUniverse\HelloHandle
     */
    public function set($key, $value)
    {
    }   
    
    /**
     * Retrieve a value.
     *
     * @param mixed $key Key to retrieve
     * 
     * @return string
     */
    public function get($key = null)
    {
    }  
}
