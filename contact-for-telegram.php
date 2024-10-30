<?php namespace ContactForTelegram;
//use Admin;
//use Front;

/**
 * @package contact-for-telegram
 */
/*
Plugin Name: Contact for Telegram
Plugin URI: https://tupaginawebdesdecero.com/
Description: Boton sencillo personalizable para enlace directo a usuario o canal de telegram.
Version: 1.0.2
Author: tupaginawebdesdecero
Author URI https://tupaginawebdesdecero.com/
License: GPLv2 or later
Text Domain: contact-for-telegram
*/



/*
*
* Prevenir acceso directo al archivo
*
*/
if (!function_exists('add_action')) {
    echo 'hola! no puedes entrar a aqui directamente.';
    exit;
}

/*
*
* Definicion de constantes del plugin
*
*/

define('CFTB_VERSION', '4.1.7');
define('CFTB_MINIMUM_WP_VERSION', '4.0');
define('CFTB_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CFTB_PLUGIN_URL', plugin_dir_url(__FILE__));


/*
*
* Obtener clase de administracion e instanciar, controla todo lo referente a la administracion
*
*/
function CFTB_admin()
{
    require_once(CFTB_PLUGIN_DIR . 'Admin/Admin.php');    
    $admin = new Admin;
    
}

CFTB_admin();

/*
*
* obtiene los datos para renderizar los botones
*
*/
function CFTB_front()
{

    require_once(CFTB_PLUGIN_DIR . 'Front/Front.php');
    $front = new Front;
   
}

CFTB_front();
