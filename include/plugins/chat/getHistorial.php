<?php
/*
  Document   : chat
  Created on : 07/04/2012, 04:13:35 PM
  Author     : Anderson Holguin
  Description:
    Obtiene el historial del chat
 */
var_dump($_REQUEST);
$mensajeActual = $_POST['mensaje'];
// se recoje le mensaje actual y se envia al archivo de chat

// se toma los toman los 50 últimos mensajes y se devuelve al chat
echo 'Recopilacion del chat';
?>
