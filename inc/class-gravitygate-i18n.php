<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.alquemie.net
 * @since      1.0.0
 *
 * @package    AlquemieGravityGate
 * @subpackage AlquemieGravityGate/inc
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    AlquemieGravityGate
 * @subpackage AlquemieGravityGate/inc
 * @author     Alquemie <plugins@alquemie.net>
 */
class alqGravityGate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gravityaddons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/lang/'
		);

	}



}
