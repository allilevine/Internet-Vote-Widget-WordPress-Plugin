<?php
/**
 * @package   Internet Vote Widget WordPress Plugin
 * @author    Allison Levine (firewatch)
 * @license   GPL-2.0+
 * @link      https://github.com/allilevine/Internet-Vote-Widget-WordPress-Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Internet Vote Widget WordPress Plugin
 * Plugin URI:        https://github.com/allilevine/Internet-Vote-Widget-WordPress-Plugin
 * Description:       Add the Internet Vote Widget script before the closing body tag.
 * Version:           1.0.0
 * Author:            Allison Levine
 * Author URI:        https://github.com/allilevine
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/allilevine/Internet-Vote-Widget-WordPress-Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Enqueue the widget script
add_action( 'wp_enqueue_scripts', 'Internet_Vote_Widget_WordPress_Plugin_enqueue_scripts' );

// Load the widget script
function Internet_Vote_Widget_WordPress_Plugin_enqueue_scripts() {

	wp_enqueue_script( 'Internet_Vote_Widget_WordPress_Plugin', 'https://fightforthefuture.github.io/internet-vote-widget/widget.min.js', array( ), null, true );

}

?>
