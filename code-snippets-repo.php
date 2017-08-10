<?php
/**
 * Plugin Name: Code Snippets Repo
 * Plugin URI: https://github.com/eugelogic/code-snippets-repo
 * Description: A WordPress custom post type plugin to gather and display useful code snippets.
 * Author: Eugene Molari
 * Author URI:  https://github.com/eugelogic
 * Version: 0.1.20170810
 * Text Domain: code-snippets-repo
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

/*
The "Code Snippets Repo" plugin is free software: you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free Software Foundation,
version 3 of the License, or any later version.
The "Code Snippets Repo" plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with the "Code Snippets Repo" plugin.
If not, see https://www.gnu.org/licenses/gpl-3.0.html.
*/

/* exit if directly accessed */
if( ! defined( 'ABSPATH' ) ) exit;

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/inc/code-snippets-repo-scripts.php');

// Check if admin
if(is_admin()){
  // Load Custom Post Type
  require_once(plugin_dir_path(__FILE__) . '/inc/code-snippets-repo-cpt.php');

  // Load Custom Fields
  require_once(plugin_dir_path(__FILE__) . '/inc/code-snippets-repo-fields.php');
}
