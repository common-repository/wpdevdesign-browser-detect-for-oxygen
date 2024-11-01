=== WPDevDesign - Oxygen - Browser Detect ===

Contributors: srikat
Tags: oxygen, oxygen builder, browser, browser detection
Donate link: https://www.paypal.me/sridharkatakam
Requires at least: 5.1
Tested up to: 5.3
Stable tag: trunk
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds "Browser" condition in [Oxygen](https://oxygenbuilder.com/) for conditional output of elements in the selected browser(s).

== Description ==

This plugin registers a [custom condition](https://wpdevdesign.com/conditions-in-oxygen/) named `Browser` using which elements in [Oxygen](https://oxygenbuilder.com/) visual site builder can be set to be output conditionally depending on the visitor's browser.

These are the browsers available in the condition's value dropdown:

* Brave
* Chrome
* Firefox
* Edge
* Internet Explorer
* Opera
* Safari
* Safari on iPhone

Operators available:
* =
* !=

This plugin uses [Browser.php](https://github.com/cbschuld/Browser.php) by Chris Schuld for browser detection.

Note: Browser detection using PHP may not (always) work. You are advised to test this plugin before investing a lot of time and energy in creating browser-specific Sections.

[Live Demo](https://dev.wpdd.site/browser-detection-test/). This page has multiple headings each set to appear in a specific browser like [this](https://share.getcloudapp.com/nOuWOw5Z).

== Installation ==

=== Automatic Installation ===

Search for `wpdevdesign` from within your WordPress plugins' Add New page and install.

=== Manual Installation ===

1. Click on the `Download` button to download the plugin.
2. Upload the entire `wpdevdesign-browser-detect` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the `Plugins` menu in WordPress.

== Screenshots ==

1. Output the element only on Edge
1. Output the element on all browsers other than Internet Exploder

== Changelog ==

= 1.0.0 - November 15, 2019 =
Initial Release.
