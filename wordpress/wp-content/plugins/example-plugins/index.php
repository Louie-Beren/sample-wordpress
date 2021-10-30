<?php
/*
Plugin Name: Example Plugin
Plugin URI:
Description: my sample plugin
Author: me
Author URI:
Version: 0.1
*/

add_action("admin_menu","addMenu");

function addMenu()
{
    add_menu_page("Example Options", "Example Options",4,"example-options", "exampleMenu");
}

function exampleMenu()
{
    echo "Hello World";
}

?>