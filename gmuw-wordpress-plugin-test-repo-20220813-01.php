<?php

/**
 * Test plugin file
 */

/**
 * Plugin Name:       Mason WordPress: Test Plugin 20220813-01
 * Author:            Mason Web Administration
 * Plugin URI:        https://github.com/mason-webmaster/gmuw-wordpress-plugin-test-repo-20220813-01
 * Description:       Test Plugin 20220813-01
 * Version:           0.9.1
 */


// Exit if this file is not called directly.
if (!defined('WPINC')) {
	die;
}

// Set up auto-updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
'https://github.com/mason-webmaster/gmuw-wordpress-plugin-test-repo-20220813-01',
__FILE__,
'gmuw-wordpress-plugin-test-repo-20220813-01'
);

// Plugin code...