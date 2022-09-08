<?php

header('Content-Type: application/json');

require_once 'responses/consultarResponse.php';
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';

$op = new Operador();
$op->Nombre = 'Arsat';
$op->TipoEmpresa = 'Publica';
$op->FormaLegal = 'Sociedad Anonima';

$sat = new Satelite();
$sat->Id = $_GET['id'];
$sat->Nombre = 'Arsat-1';
$sat->Operador = $op;
$sat->TipoMision = 'comunicaciones';
$sat->DuracionEnAnios = '15';

$resp = new ConsultarResponse();
$resp->Satelite = $sat;

echo json_encode($resp);





