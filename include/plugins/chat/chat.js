/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $('#botonEnvio').button();
    $('#botonEnvio').click(function(){
        $('#divVisorChat').load('include/plugins/chat/getHistorial.php',
        {
            mensaje:$('#txtMensaje').val()
        });
    //alert('salida');
    });
});

