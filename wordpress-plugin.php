<?php
/**
 * Plugin Name:SURGE
 * Plugin URI:
 * Description: Esqueleto Básico
 * Version: 1.0
 * Author: SURGE, LDA
 * Text Domain: SURGE
 * Author URI: https://surge.pt
 * License: A "Slug" license name e.g. GPL2
 *
 *
 * @package Surge
 *
 *
 **/

//Security - Don't allow direct access
defined('ABSPATH') or die('Olá, estás perdido?');

define('PLUGIN_PATH', plugin_dir_path(__FILE__));

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}