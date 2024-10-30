<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
 

/*
*
* borrado de opciones
*
*/ 
delete_option('CFTB_channel');
delete_option('CFTB_color');
delete_option('CFTB_position');
delete_option('CFTB_unit');
delete_option('CFTB_top');
delete_option('CFTB_bottom');
delete_option('CFTB_right');
delete_option('CFTB_left');


 
