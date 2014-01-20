<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Teleportation
 * @package   App
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */
namespace app;

use TTI\AbstractFactory\HandleAbstraction;

/**
 * Teleportation responsibility is to redirect Roar to matching universe
 *
 * @category Teleportation
 * @package  App
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://www.breezeframework.com/thetrollinception.php
 */
class Teleportation extends HandleAbstraction
{
    /**
     *
     * @var object 
     */
    protected $route;

    /**
     * Teleport to matching Route
     * 
     * @param object $portal   Router object
     * @param string $uri      Url params
     * @param object $roar     Dependency injector and container
     * @param object $template Template engine
     * 
     * @return void
     */
    public function teleport($portal, $uri, $roar, $template)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        $this->route = $portal->match($path, $_SERVER);

        $this->_reRoute();

        $controller = $this->get('controller');
        $action = $this->get('action');

        $page = new $controller($roar, $template);

        echo $page->$action($this->route->params);    
    }
    
    /**
     * Retrieve controller or action params.
     *
     * @param mixed $key Key to retrieve
     * 
     * @return string
     */
    public function get($key = null)
    {
        if (isset($this->route->params[$key])) {
            $value = $this->route->params[$key];
        } else {
            $value = 'Index';
        }
        
        return (string) $value;
    }
    
    /**
     * Reroute in case of failure.
     *
     * @return void
     */
    private function _reRoute()
    {
        if (!$this->route) {
            echo "No application route was found for that URL path.";
        }
    }    
}