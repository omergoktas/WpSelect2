<?php
/**
 * Plugin Name: WpSelect2
 * Plugin URI: https://omergoktas.com
 * Description: Simple Select2 plug-in for WordPress.
 * Version: 1.0.0
 * Author: Ömer Göktaş
 * Author URI: https://omergoktas.com
 * Author Email: iletisim@omergoktas.com
 * Credits:
 *    Igor Vaynberg [ https://select2.org ]
 *    Keith Parent  [ https://www.keithparent.com ]
 * License:
 *    Copyright 2022 Ömer Göktaş (iletisim@omergoktas.com)
 *    Copyright 2013 Keith Parent (keithparent@me.com)
 *
 *    This program is free software; you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License, version 2, as 
 *    published by the Free Software Foundation.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program; if not, write to the Free Software
 *    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

function enqueue_select2_jquery() {
    wp_enqueue_style("select2css", WP_PLUGIN_URL."/TransParent_Select2/select2/css/select2.css", false, "4.1.0");
    wp_enqueue_script("jquery");
    wp_enqueue_script("select2", WP_PLUGIN_URL."/TransParent_Select2/select2/js/select2.js", array("jquery"), "4.1.0", 1);  
    wp_enqueue_script("select2init", WP_PLUGIN_URL."/TransParent_Select2/select2-init.js", array("jquery", "select2"), "1.0.0", 1); 
}

if (!is_admin()) {
    add_action('init', 'enqueue_select2_jquery');
}