/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

    $( "#divChat" ).load(
        'index.php',
        {
            ruta_archivo:'controller/getChat.php'
        }
        );

});

