<?php

namespace ContactForTelegram;

class Admin
{
    /**
     *
     * Ejecucion de funciones
     *
     */
    function __construct()
    {
        //Creacion de menu de administracion
        $this->CFTB_menu();
        //Registro de opciones de la pagina de configuracion
        $this->CFTB_options();
        //Registro de opciones de la pagina de configuracion
        $this->CFTB_notification();
        //Registro de archivos css
        $this->CFTB_admin_css();
        //Registro de archivos js
        $this->CFTB_admin_js();
    }

    /**
     *
     * Registro de archivos css
     *
     */
    public function CFTB_admin_css()
    {

        function admin_register_css()
        {
            wp_enqueue_style('admin-telegram-btn-style', CFTB_PLUGIN_URL . 'Admin/css/styles.css');
        }

        add_action('admin_enqueue_scripts', 'ContactForTelegram\admin_register_css');
    }

    /**
     *
     * Registro de archivos js
     *
     */
    public function CFTB_admin_js()
    {

        function admin_register_js()
        {
            wp_enqueue_script('admin-telegram-btn-admin-scripts', CFTB_PLUGIN_URL . 'Admin/js/scripts.js');
            wp_enqueue_script('iris', CFTB_PLUGIN_URL . 'Admin/js/iris.min.js');
            wp_enqueue_script('iris-init', CFTB_PLUGIN_URL . 'Admin/js/iris-init.js');
        }

        add_action('admin_enqueue_scripts', 'ContactForTelegram\admin_register_js');
    }

    /**
     *
     * Creacion de menu de administracion
     *
     */

    public function CFTB_menu()
    {

        function admin_menu_primary()
        {
            $page_title = 'Telegram Contact';
            $menu_title = 'Telegram Contact';
            $capability = 'manage_options';
            $menu_slug  = 'telegram-contact-config';
            $function   = 'ContactForTelegram\CFTB_admin_config';
            $icon_url   = CFTB_PLUGIN_URL . "/Admin/img/telegram_icon_menu.png";
            $position   = 100;
            add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);

            //var_dump(view_config()); exit();
        }

        add_action('admin_menu', 'ContactForTelegram\admin_menu_primary');

        function CFTB_admin_config()
        {
            require_once(CFTB_PLUGIN_DIR . 'Admin/views/config.php');
        }
    }

    /**
     *
     * Registro de opciones de la pagina de configuracion
     *
     */

    public function CFTB_options()
    {
        function admin_register_options()
        {
            register_setting('telegram-btn-options', 'CFTB_channel');
            register_setting('telegram-btn-options', 'CFTB_color');
            register_setting('telegram-btn-options', 'CFTB_size');
            register_setting('telegram-btn-options', 'CFTB_position');
            register_setting('telegram-btn-options', 'CFTB_unit');
            register_setting('telegram-btn-options', 'CFTB_top');
            register_setting('telegram-btn-options', 'CFTB_bottom');
            register_setting('telegram-btn-options', 'CFTB_right');
            register_setting('telegram-btn-options', 'CFTB_left');
        }

        add_action('admin_init', 'ContactForTelegram\admin_register_options');
    }

    /**
     *
     * Registro de opciones de la pagina de configuracion
     *
     */

    public function CFTB_notification()
    {
        require_once(CFTB_PLUGIN_DIR . 'Admin/Notification.php');
        $notification = new Notification;

        if (esc_attr(get_option('CFTB_channel')) == "") {
            $notification->CFTB_no_channel();
        };
    }
}
