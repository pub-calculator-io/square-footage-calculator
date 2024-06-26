<?php
/*
Plugin Name: CI Square footage calculator
Plugin URI: https://www.calculator.io/square-footage-calculator/
Description: Square footage calculator finds the surface area (square footage) of various shapes and calculates associated construction costs. It can be used as a room area calculator.
Version: 1.0.0
Author: Square Footage Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_square_footage_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Square Footage Calculator by www.calculator.io";

function display_calcio_ci_square_footage_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Square Footage Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_square_footage_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_square_footage_calculator', 'display_calcio_ci_square_footage_calculator' );