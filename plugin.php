<?php
/*
Plugin Name:	WPDevDesign - Oxygen - Browser Detect
Plugin URI:		https://wpdevdesign.com/plugin-oxygen-browser-detect/
Description:	Adds "Browser" condition in Oxygen for conditional output of elements in the selected browser(s).
Version:		1.0.0
Author:			Sridhar Katakam
Author URI:		https://wpdevdesign.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'Browser' ) ) {
	include dirname( __FILE__ ) . '/assets/php/Browser.php';
}

add_action( 'oxygen_enqueue_scripts', 'wpdd_call_oxygen_vsb_register_condition' );
/**
 * Run oxygen_vsb_register_condition().
 */
function wpdd_call_oxygen_vsb_register_condition() {
	if ( function_exists( 'oxygen_vsb_register_condition' ) ) {

		oxygen_vsb_register_condition(
			// Condition Name
			'Browser',

			// Values: The array of pre-set values the user can choose from.
			// Set the custom key's value to true to allow users to input custom values.
			array( 
				'options' => array( 'Brave', 'Chrome', 'Firefox', 'Edge', 'Internet Explorer', 'Opera', 'Safari', 'Safari on iPhone' ),
				'custom' => false
			),

			// Operators
			array( '==', '!=' ),

			// Callback Function: Name of function that will be used to handle the condition
			'wpdd_browser_callback',

			// Condition Category: Default ones are Archive, Author, Other, Post, User
			'Other'
		);

	}
}

/**
 * Callback function to handle the Browser condition.
 * @param  mixed 	$value    	Input value - in this case, value selected by the user.
 * @param  string 	$operator 	Comparison operator selected by the user.
 *
 * @return boolean 				true or false.
 */
function wpdd_browser_callback( $value, $operator ) {
	$browser = new Browser();

	if ( '==' === $operator ) {
		switch ( $value ) {
			case 'Brave':
				return Browser::BROWSER_BRAVE === $browser->getBrowser();
				break;
			
			case 'Chrome':
				return Browser::BROWSER_CHROME === $browser->getBrowser();
				break;
			
			case 'Firefox':
				return Browser::BROWSER_FIREFOX === $browser->getBrowser();
				break;
			
			case 'Edge':
				return Browser::BROWSER_EDGE === $browser->getBrowser();
				break;
			
			case 'Internet Explorer':
				return Browser::BROWSER_IE === $browser->getBrowser();
				break;
			
			case 'Opera':
				return Browser::BROWSER_OPERA === $browser->getBrowser();
				break;
			
			case 'Safari':
				return Browser::BROWSER_SAFARI === $browser->getBrowser();
				break;

			case 'Safari on iPhone':
				return Browser::BROWSER_IPHONE === $browser->getBrowser();
				break;
	
			default:
				return true;
				break;
		}
	} else {
		switch ( $value ) {
			case 'Brave':
				return Browser::BROWSER_BRAVE !== $browser->getBrowser();
				break;
			
			case 'Chrome':
				return Browser::BROWSER_CHROME !== $browser->getBrowser();
				break;
			
			case 'Firefox':
				return Browser::BROWSER_FIREFOX !== $browser->getBrowser();
				break;
			
			case 'Edge':
				return Browser::BROWSER_EDGE !== $browser->getBrowser();
				break;
			
			case 'Internet Explorer':
				return Browser::BROWSER_IE !== $browser->getBrowser();
				break;
			
			case 'Opera':
				return Browser::BROWSER_OPERA !== $browser->getBrowser();
				break;
			
			case 'Safari':
				return Browser::BROWSER_SAFARI !== $browser->getBrowser();
				break;
			
			case 'Safari on iPhone':
				return Browser::BROWSER_IPHONE !== $browser->getBrowser();
				break;

			default:
				return true;
				break;
		}
	}	
}