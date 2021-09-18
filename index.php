<?php
require_once 'modelo/cliente.php';
require_once 'modelo/datosPersona.php';
require_once 'modelo/ventas.php';

$cliente = new Cliente();
$cliente->setCodigo('123456');

$venta = new Ventas();
$venta->setFecha('14/05/2002');
$venta->setCliente($cliente);

$venta->MostrarDatos();