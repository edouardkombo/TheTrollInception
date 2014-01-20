<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Bootsrap
 * @package   App
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://www.breezeframework.com/thetrollinception.php
 * @since     1.0.0
 */

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    die("This file cannot be executed directly");
}
date_default_timezone_set('Europe/Paris');

//Disable magic_quotes if activated
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}

/**
* The project folder, containing all folders, libraries and dependencies.
*
* @var string
*/
define('PROJECT_FOLDER', realpath(__DIR__ . '/../') . '/');

/**
* The root vendor folder, containing all dependencies.
*
* @var string
*/
define('VENDOR_FOLDER', PROJECT_FOLDER . 'vendor/');

/**
* The root application folder, containing all local applications.
*
* @var string
*/
define('SOURCE_FOLDER', PROJECT_FOLDER . 'app/');

/**
* The root folder for TTI (The Troll Inception) source files
*
* @var string
*/
define('TTI_FOLDER', VENDOR_FOLDER . 'edouardkombo/');

/**
* The public folder where is the front controller
*
* @var string
*/
define('WEB_FOLDER', PROJECT_FOLDER . 'public_html/');

/**
* The default extension for config files
*
* @var string
*/
define('CONFIG_EXT', 'iln');

/**
* An application wide Salt. Change it to something random
*
* @var string
*/
define('APPLICATION_SALT', gethostname());


//TTI Environment mode, production, development or testing
if (!defined('TTI_ENVIRONMENT')) {
    if (PHP_SAPI == 'cli') {
        if (gethostname() === 'localhost') {
            define('TTI_ENVIRONMENT', 'production');
        } else {
            define('TTI_ENVIRONMENT', 'testing');
        }
    } else if (in_array($_SERVER['SERVER_ADDR'], array('::1', '127.0.0.1'))) {
        define('TTI_ENVIRONMENT', 'development');
    } else {
        define('TTI_ENVIRONMENT', 'production');
    }
}

// Error Reporting of the application depending of the environment
switch (TTI_ENVIRONMENT) {
    case 'testing':
    case 'development':
        \php_error\reportErrors();
        break;
    default:
        error_reporting(E_ALL & ~E_DEPRECATED);
        ini_set('display_errors', 0);
        break;
}
