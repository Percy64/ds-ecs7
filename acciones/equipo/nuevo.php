<?php

require_once '../../modelo/jugador.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';
header('Content-Type: application/json');

$resp = new NuevoResponse();

$json = file_get_contents('php://input',true);
$req = json_decode($json);
$cantj=0;

foreach ($req->$ListJugadores as $jug) 
{
    $cantj=$cantj+1;
}

    if ($cantj>=1 && $cantj<=5) {
        $resp->isok='true';
        $resp->mensaje='';
    } else {
        $resp->isok='false';
        $resp->mensaje='';
    }



echo json_encode($resp);
