<?php
/**
 * Init the engine
 *
 * @package Unifato
 */

define('ABSPATH', dirname(dirname(__FILE__)) . '/');

$GLOBALS['body_class'] = '';
$GLOBALS['body_classes'] = array();
$GLOBALS['enable_relative_nav'] = false;

// Includes -------------------------------------------------
include_once 'functions.php';
include_once 'script-loader.php';
include_once 'template-tags.php';

// Vendors
$js = 'assets/js';
$css = 'assets/css';
$vendors = 'assets/vendors';
$node = 'node_modules';

// CSS
enqueue_style( 'template', $css . '/style.css', 99 );
enqueue_style( 'custom', $css . '/custom.css', 99 );

// JS
enqueue_script( 'jquery', $vendors . '/jquery/jquery.min.js' );
enqueue_script( 'lodash', $vendors . '/lodash/lodash.min.js' );
enqueue_script( 'template', $js . '/template.js', 99);
enqueue_script( 'custom', $js . '/custom.js', 99 );