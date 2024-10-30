<?php namespace ContactForTelegram;

class  Notification
{

    function __construct()
    {
    }
    

    public function CFTB_no_channel()
    {
        function sample_admin_notice__no_channel() {
            $class = 'notice notice-error';
            $message = __( 'Debes introducir tu usuario o canal de telegram para activar el boton.', 'sample-text-domain' );
         
            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }

        add_action( 'admin_notices', 'sample_admin_notice__no_channel' );
    }
}
