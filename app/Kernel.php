<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  App
 * @package   Kernel
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */

require 'Autoload.php';

$classLoader = new SplClassLoader('src', '..');
$classLoader->register();

$classLoader = new SplClassLoader('app', '..');
$classLoader->register();