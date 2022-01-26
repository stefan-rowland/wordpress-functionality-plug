<?php

function itsaWrap_activate() { 
  require_once plugin_dir_path( __FILE__ ) . 'includes/its-a-wrap-activator.php';
	ItsaWrap_Activator::activate();
}

function itsaWrap_deactivate() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/its-a-wrap-deactivator.php';
	ItsaWrap_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'itsaWrap_activate' );
register_deactivation_hook( __FILE__, 'itsaWrap_deactivate' );
register_uninstall_hook(__FILE__, 'itsaWrap_function_to_run');

require plugin_dir_path( __FILE__ ) . 'includes/class-its-a-wrap.php';

function run_itsaWrap() {
	$plugin = new ItsaWrap();
	$plugin->run();
}

run_itsaWrap();