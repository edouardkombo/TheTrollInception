<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  RoutesMap
 * @package   Config
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */
namespace app\config;

/**
 * RoutesMap responsibility is to collect routes, only that
 *
 * @category RoutesMap
 * @package  Config
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://www.breezeframework.com/thetrollinception.php
 */
class RoutesMap
{
    /**
     * All routes map
     * 
     * @param object $portal Router object
     * 
     * @return object
     */
    public function map($portal)
    {
        $portal->add('hello', '/')
            ->addValues(
                array(
                    'controller' => 'src\DemoSpace\HelloUniverse\Controllers\HelloHandle',
                    'action'     => 'hello',
                )
            );
        
        $portal->add('demo', '/index{format}')
            ->addTokens(
                array(
                    'format'     => '(\.[^/]+)?',
                    'REQUEST_METHOD' => 'GET|POST',
                )
            )                
            ->addValues(
                array(
                    'controller' => 'src\DemoSpace\HelloUniverse\Controllers\HelloHandle',
                    'action'     => 'hello',
                )
            );        

        $portal->add('read', '/hello/{name}')
            ->addTokens(
                array(
                    'name'     => '([a-z][a-zA-Z0-9_,]*)',
                    'REQUEST_METHOD' => 'GET|POST',
                )
            )            
            ->addValues(
                array(
                    'controller' => 'src\DemoSpace\HelloUniverse\Controllers\HelloHandle',
                    'action'     => 'index',
                )
            );

        return (object) $portal;
    }
}