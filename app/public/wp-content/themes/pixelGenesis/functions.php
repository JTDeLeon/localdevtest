<?php
/**
 * Genesis Framework
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit
 * this file under any circumstances. Please do all modifications
 * in the form of a child theme.
 *
 * @package  Genesis
 * @author   StudioPress
 * @license  GPL-2.0-or-later
 * @link     https://my.studiopress.com/themes/genesis/
 */

/**
 * Calls the init.php file, but only if the child theme has not called it first.
 *
 * This method allows the child theme to load
 * the framework so it can use the framework
 * components immediately.
 */
require_once dirname( __FILE__ ) . '/lib/init.php';


//Function to add Meta Tags in Header without Plugin
function add_meta_tags() {
    ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    <?php }
    add_action('wp_head', 'add_meta_tags');
    