<?php
require_once '../../api/estacionamiento/modeloRespuestas/consultarRespuesta.php';
require_once '../../api/estacionamiento/modeloRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/oportunidad.php';
require_once '../../modelo/persona.php';
require_once '../../modelo/datosOperacion.php';

header('Content-Type: application/json');

$resp = new ConsultarTodosRespuesta();

$p = new Persona();
$p->Nombres = "pedro rodriguez";
$p->Sexo = "F";
$p->Documento= 123123;
$p->Email= "aaaa@aaaa.com.ar";
$p->Celular= 123456;
$p->TelefonoAlternativo= 123456;

$d = new DatosOperacion();
$d->MontoSolicitado=500000;
$d->Linea= 504;
$d->CantidadCuotas= 12;
$d->TasaEfectivaMensual= 2.9589;
$d->CuotaPromedio= 53503.08;
$d->TasaNominalAnual=36;
$d->CostoFinancieroTotal=56.55;

$o = new Oportunidad();
$o->Persona= $p;
$o->DatosOperacion= $d;
$o->SmsConsultaId=17654293-27258197726;
$o->IdValidatorId=893;
$o->MotorSolaFirmaId=8870;

$resp->Oportunidad = $o;
$resp->IsOk=true;

echo json_encode($resp);