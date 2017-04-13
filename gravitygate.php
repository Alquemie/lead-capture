<?php
/*
Plugin Name: Gravity Gate
Plugin URI: https://www.gravityaddons.com/gravity-gate/
Description: Gated content in WordPress using Gravity Forms
Version: 0.1
Author: Alquemie
Author URI: http://www.alquemie.net
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

------------------------------------------------------------------------
Copyright 2016-2017 Alquemie Marketing, LLC.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

if ( !defined('ABSPATH') ) {
	header( 'HTTP/1.0 403 Forbidden' );
	die;
}

define( 'AQ_GRAVITY_GATE_VERSION', '0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in inc/class-gravitygate-activator.php
 */
function activate_alq_gravitygate() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/class-gravitygate-activator.php';
	alqGravityGate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in inc/class-gravitygate-deactivator.php
 */
function deactivate_alq_gravitygate() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/class-gravitygate-deactivator.php';
	alqGravityGate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_alq_gravitygate' );
register_deactivation_hook( __FILE__, 'deactivate_alq_gravitygate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'inc/class-gravitygate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_alquemie_gravitygate() {

	$plugin = new alqGravityGate();
	$plugin->run();

}
run_alquemie_gravitygate();
