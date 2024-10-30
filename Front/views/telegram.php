<?php

$channel = esc_attr(get_option('CFTB_channel'));


$unit = get_option('CFTB_unit');
$size = get_option('CFTB_size');
$top = get_option('CFTB_top');
$bottom = get_option('CFTB_bottom');
$right = get_option('CFTB_right');
$left = get_option('CFTB_left');
$color = get_option('CFTB_color');


$size_css = "width:" . $size . "px;"."height:" . $size . "px;";
$fondo = "background:" . $color . ";";


$position = esc_attr(get_option('CFTB_position'));

switch ($position) {
    case 1:
        $posicionamiento = "bottom:2%; left:2%;";
        break;
    case 2:
        $posicionamiento = "bottom:2%; left:45%;";
        break;
    case 3:
        $posicionamiento = "bottom:2%; right:2%;";
        break;
    case 4:
        $posicionamiento = "bottom:40%; left:2%;";
        break;
    case 5:
        $posicionamiento = "bottom:40%; left:45%;";
        break;
    case 6:
        $posicionamiento = "bottom:40%; right:2%;";
        break;
    case 7:
        $posicionamiento = "top:10%; left:2%;";
        break;
    case 8:
        $posicionamiento = "top:10%; left:45%;";
        break;
    case 9:
        $posicionamiento = "top:10%; right:2%;";
        break;
    case 0:
        $posicionamiento = "top:" . $top . $unit . ";" . "bottom:" . $bottom . $unit . ";" . "right:" . $right . $unit . ";" . "left:" . $left . $unit . ";";
        break;
    default:
        $posicionamiento = "bottom:2%; right:2%;";
}


?>

<?php

if ($channel != '') { ?>

    <div id="telegram-btn" style="<?php echo $posicionamiento . $fondo. $size_css; ?> ">

        <a href="https://t.me/<?php echo $channel ?>" target="_blank">
            <img class="telegram-btn" src=<?php echo "\"" . CFTB_PLUGIN_URL . "Front/img/telegram_icon.png\""   ?> alt="">
        </a>
    </div>

<?php
}
?>