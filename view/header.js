/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

    $( "#tabs" ).tabs({
        event: "mouseover"
    });



});

function cargarStream(valor){
    $('#divStreaming').tabs( "destroy" );
    $('#divStreaming').load(
        'index.php',
        {
            ruta_archivo:'controller/getStreaming.php',
            canal_id:valor
        },
        function(){
            $( "#divStreaming" ).tabs();
        }
        );
}