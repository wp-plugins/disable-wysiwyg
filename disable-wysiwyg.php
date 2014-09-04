<?php
/**
 * @package   Disable_WYSIWYG
 * @author    Tunghsiao Liu <t@sparanoid.com>
 * @license   GPL-2.0+
 * @link      http://sparanoid.com/
 * @copyright Sparanoid
 *
 * @wordpress-plugin
 * Plugin Name:       Disable WYSIWYG
 * Plugin URI:        http://sparanoid.com/work/disable-wysiwyg/
 * Description:       Disable WYSIWYG totally completely permanently forever
 * Version:           1.0.0
 * Author:            Tunghsiao Liu
 * Author URI:        http://sparanoid.com/
 * Text Domain:       disable-wysiwyg
 * License:           GPL2+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/sparanoid/disable-wysiwyg
 */

/**
 * Disable WYSIWYG
 *
 * @since Disable_WYSIWYG 1.0.0
 */

add_filter('user_can_richedit', false);

?>