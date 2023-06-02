<?php

require_once 'modelos/Mascota.php';
require_once 'modelos/Dueniomascota.php';


$d = new Dueniomascota;

$d->Nombre = "Ezequiel";
$d-> Apellido = "Gliosci";
$d->Id = "180204";
$d-> Documento = "45639333" ;
$d->Celular = "3413243759";
$d->Direccion = "Anchoris 1925";

$m = new Mascota;

$m->Nombre = "Mora";
$m->Id = 8988;
$m-> Raza = "Pitbull";
$m-> Dueniomascota = $d;





$m->MostrarPropiedades();


