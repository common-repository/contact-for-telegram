x = true;

function mostrar_tipo_posicionamiento() {
    let posicion_personalizada = document.getElementsByClassName('posicion_personalizada');
    let posicionamiento = document.getElementById('posicionamiento');


    if (x == true) {

        original_top = document.getElementById('top').value;
        original_bottom = document.getElementById('bottom').value;
        original_right = document.getElementById('right').value;
        original_left = document.getElementById('left').value;
        x = false;
    }


    console.log(original_bottom);


    if (posicionamiento.value == 0) {

        for (let i = 0; i < posicion_personalizada.length; i++) {
            posicion_personalizada[i].style.display = 'table-row';
        }

        document.getElementById('top').value = original_top;
        document.getElementById('bottom').value = original_bottom;
        document.getElementById('right').value = original_right;
        document.getElementById('left').value = original_left;

    }

    if (posicionamiento.value > 0) {
        for (let i = 0; i < posicion_personalizada.length; i++) {
            posicion_personalizada[i].style.display = 'none';
        }

        document.getElementById('top').value = "";
        document.getElementById('bottom').value = "";
        document.getElementById('right').value = "";
        document.getElementById('left').value = "";
    }

    //console.log(posicion_personalizada);


}







