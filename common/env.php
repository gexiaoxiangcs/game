<?php
/**
 * Require helpers
 */
require_once(__DIR__ . '/helpers.php');

/**
 * Load application environment from .env file
 */
$dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

//$envs = parse_ini_file(dirname(__DIR__) . '/.env', true, true);
//foreach ($envs as $k => $v) {
//    putenv("$k=$v");
//}
/**
 * Init application constants
 */

defined('YII_DEBUG') or define('YII_DEBUG', env('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV', 'prod'));

