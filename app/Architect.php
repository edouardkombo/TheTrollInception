<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Architect
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
 * Architect responsibility is to configure and render view
 *
 * @category Architect
 * @package  App
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://www.breezeframework.com/thetrollinception.php
 */
class Architect extends HandleAbstraction
{
    /**
     *
     * @var object $template
     */
    protected $template;
    
    /**
     *
     * @var object $response
     */
    public $response;    

    /**
     * Constructor fullfilled with template parameters
     * 
     * @param object $template Template configuration
     */
    public function __construct($template)
    {
        $this->template = $template;
    }  
    
    /**
     * Render a view
     * 
     * @param string $page   Page to render
     * @param array  $values Values to assign
     * 
     * @return \app\Architect\render
     */
    public function render($page, $values)
    {
        return $this->response = $this->template->render($page, $values);        
    }
    
    /**
     * Retrieve something.
     *
     * @param mixed $key Key to retrieve
     * 
     * @return void
     */
    public function get($key = null)
    {
    }    
}