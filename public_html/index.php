<?php

/**
 * The Troll Inception Front Controller (Arc Scenario)
 * 
 * PHP version 5
 * 
 * @category  ArcScenario
 * @package   Public_Html
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */

require '../vendor/autoload.php';
require '../app/Bootstrap.php';
require '../app/Kernel.php';

use TTI\ParserStrategy\IlnParser;
use TTI\DependencyStrategy\Roar;

//The torch can light the map
$torch = new IlnParser();
$torch->open('../app/config/Services.iln')->escape()->parse();

//Roar uses the torch to light the map
$roar = new Roar();
$roar->input($torch->container);

//Roar gets instructions from travellers
$eagle = $roar->get('request.helper.driver');

//Roar decides to go to the magic portal
$portal = $roar->get('router.driver')->newInstance();

//Then, he invokes all routes possible to teleport to
$invoke = $roar->get('routes.map.driver')->map($portal);

//We load the visual architect
$architect = $roar->get('architect.driver');

//Finally, Roar can teleport to the matching universe
$teleport = $roar->get('teleportation.driver')->teleport($invoke, $eagle->uri(), $roar, $architect);

