<?php

namespace ContactForTelegram;

class Front
{

    /**
     *
     * Ejecucion de funciones
     *
     */
    function __construct()
    {
        //Renderizado del boton de telegram
        $this->CFTB_render_button();
        //Creacion de menu de administracion
        $this->CFTB_front_css();
    }

    /**
     *
     * Registro de archivos css
     *
     */
    public function CFTB_front_css()
    {

        function register_front_css()
        {
            wp_enqueue_style('telegram-btn-style', CFTB_PLUGIN_URL . 'Front/css/styles.css');
        }

        add_action('wp_enqueue_scripts', 'ContactForTelegram\register_front_css');
    }

    /**
     *
     * Renderizado del boton de telegram
     *
     */
    public function CFTB_render_button()
    {
        function CFTB_render()
        {
            require_once(CFTB_PLUGIN_DIR . 'Front/views/telegram.php');
        }
        add_action('wp_footer', 'ContactForTelegram\CFTB_render');
    }
}
