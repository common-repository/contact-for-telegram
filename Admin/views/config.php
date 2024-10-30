 <?php      
    

    if (esc_attr(get_option('CFTB_color')) == "") {
        $color = "#0088cc";
    } else {
        $color = esc_attr(get_option('CFTB_color'));
    }

    if (esc_attr(get_option('CFTB_size')) == "") {
        $size = 80;
    } else {
        $size = esc_attr(get_option('CFTB_size'));
    }

    ?>


 <div class="wrap">
     <h1>Boton de Telegram</h1>


     <form method="post" action="options.php">
         <?php settings_fields('telegram-btn-options'); ?>
         <?php do_settings_sections('telegram-btn-options');
            ?>
         <table class="form-table">         

             <tr valign="top">
                 <th scope="row">Usuario o Canal</th>
                 <td><input type="text" name="CFTB_channel" required value="<?php echo esc_attr(get_option('CFTB_channel')); ?>" /></td>
             </tr>

             <tr valign="top">
                 <th scope="row">Color de fondo</th>
                 <td><input id="color" class="color-picker" type="text" name="CFTB_color" required value="<?php echo $color; ?>" maxlength="7" /></td>
             </tr>

             <tr valign="top">
                 <th scope="row">Previsualizar</th>
                 <td>
                     <div id="preview" style="width:100px; border-radius:500px;<?php echo "background:" . $color . ""; ?>">
                         <img style="width:100%;" class="telegram-btn" src=<?php echo "'" . CFTB_PLUGIN_URL . "Front/img/telegram_icon.png'"; ?>>
                     </div>
                 </td>
             </tr>

             <tr valign="top">
                 <th scope="row">Tamaño (px)</th>
                 <td><input type="number" step="1" max="1000" name="CFTB_size" required value="<?php echo $size; ?>" /></td>
             </tr>


             <tr valign="top">
                 <th scope="row">Position</th>
                 <td> <select onchange="mostrar_tipo_posicionamiento()" name="CFTB_position" id="posicionamiento">
                         <?php
                            $position = esc_attr(get_option('CFTB_position'));
                            if ($position == "") {
                                $position = 9;
                            }
                            ?>


                         <option value="1" <?php if ($position == 1) {
                                                echo 'selected';
                                            } ?>>Abajo-Izquierda</option>
                         <option value="2" <?php if ($position == 2) {
                                                echo 'selected';
                                            } ?>>Abajo-Centro</option>
                         <option value="3" <?php if ($position == 3) {
                                                echo 'selected';
                                            } ?>>Abajo-Derecha</option>
                         <option value="4" <?php if ($position == 4) {
                                                echo 'selected';
                                            } ?>>Centro-Izquierda</option>
                         <option value="5" <?php if ($position == 5) {
                                                echo 'selected';
                                            } ?>>Centro-Centro</option>
                         <option value="6" <?php if ($position == 6) {
                                                echo 'selected';
                                            } ?>>Centro-Derecha</option>
                         <option value="7" <?php if ($position == 7) {
                                                echo 'selected';
                                            } ?>>Arriba-Izquierda</option>
                         <option value="8" <?php if ($position == 8) {
                                                echo 'selected';
                                            } ?>>Arriba-Centro</option>
                         <option value="9" <?php if ($position == 9) {
                                                echo 'selected';
                                            } ?>>Arriba-Derecha</option>
                         <option value="0" <?php if ($position == 0) {
                                                echo 'selected';
                                            } ?>>Personalizado</option>
                     </select>

                 </td>
             </tr>


             <tr valign="top" class="posicion_personalizada" <?php if ($position != 0) {
                                                                    echo "style=\"display: none !important;\"";
                                                                } ?>>
                 <th scope="row">Unit</th>
                 <td> <select name="CFTB_unit">
                         <?php $unit = esc_attr(get_option('CFTB_unit')); ?>


                         <option value="px" <?php if ($unit == "px") {
                                                echo 'selected';
                                            } ?>>px</option>
                         <option value="%" <?php if ($unit == "%") {
                                                echo 'selected';
                                            } ?>>%</option>
                     </select>

                 </td>
             </tr>

             <tr valign="top" class="posicion_personalizada" <?php if ($position != 0) {
                                                                    echo "style=\"display: none !important;\"";
                                                                } ?>>
                 <th scope="row">Top</th>
                 <td><input id="top" type="number" name="CFTB_top" value="<?php echo esc_attr(get_option('CFTB_top')); ?>" /></td>
             </tr>
             <tr valign="bottom" class="posicion_personalizada" <?php if ($position != 0) {
                                                                    echo "style=\"display: none !important;\"";
                                                                } ?>>
                 <th scope="row">Bottom</th>
                 <td><input id="bottom" type="number" name="CFTB_bottom" value="<?php echo esc_attr(get_option('CFTB_bottom')); ?>" /></td>
             </tr>
             <tr valign="top" class="posicion_personalizada" <?php if ($position != 0) {
                                                                    echo "style=\"display: none !important;\"";
                                                                } ?>>
                 <th scope="row">Right</th>
                 <td><input id="right" type="number" name="CFTB_right" value="<?php echo esc_attr(get_option('CFTB_right')); ?>" /></td>
             </tr>
             <tr valign="top" class="posicion_personalizada" <?php if ($position != 0) {
                                                                    echo "style=\"display: none !important;\"";
                                                                } ?>>
                 <th scope="row">Left</th>
                 <td><input id="left" type="number" name="CFTB_left" value="<?php echo esc_attr(get_option('CFTB_left')); ?>" /></td>
             </tr>




         </table>

         <?php submit_button(); ?>

     </form>
 </div>