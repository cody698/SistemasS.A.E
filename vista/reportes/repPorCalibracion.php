<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/calibracionControlador.php";
require_once "../../modelo/calibracionModelo.php";

$id = $_GET["id"];
$herra = ControladorCalibraciones::ctrPorCalibracion($id);
$today = getdate();

$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,1); 
$pdf->SetFont('Arial','B',16);
$pdf->Image('../../assest/imagenes/logosae1.png',10,10,-250);
$pdf->Cell(200, 22, 'SOLICITUD DE SERVICIO', 0, 0, 'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(-19, 0, 'FOR-09-01', 0, 2, 'R');
$pdf->Cell(-23, 8, 'REV. 02', 0, 2, 'R');
$pdf->Cell(-5, 0, 'FECHA: '.date('2020/11/18'), 0, 1, 'R');
$pdf->SetFont('Arial','',11);
$pdf->setY(20);
$pdf->setX(155);
$pdf->SetFillColor(215,211,189);
$pdf->Cell(5, 5, '', 1, 0, 'L',true);
$pdf->Cell(5, 5, 'Llenado por el Laboratorio', 0, 2, 'L');
$pdf->setY(25);
$pdf->setX(155);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(5, 5, '', 1, 0, 'L',true);
$pdf->Cell(5, 5, 'Llenado por el Cliente', 0, 2, 'L');
$pdf->setY(34);
$pdf->setX(150);
$pdf->SetFont('Arial','B',14);
$pdf->SetFillColor(215,211,189);
$pdf->Cell(50, 10, 'Reg:.........................', 0, 1, 'L',true);


/* SEGUNDA PARTE DATOS EMPRESA */
$pdf->SetFont('Arial','B',12);
$pdf->setY(45);
$pdf->Cell(5, 7,utf8_decode('Nombre de la compañia:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, "SAE S.R.L.", 1, 1, '');
$pdf->setY(53);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Dirección:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, "Av. Killman No 1691", 1, 1, '');
$pdf->setY(61);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Teléfono:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, "4062634 - 72235333", 1, 1, '');
$pdf->setY(69);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Ciudad:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, "COCHABAMBA - BOLIVIA", 1, 1, '');

$pdf->SetFont('Arial','B',12);
$pdf->setY(78);
$pdf->setX(15);
$pdf->SetDrawColor(221,221,221);
$pdf->Cell(100, 7,utf8_decode('Información del equipo/Instrumento'), 1, 0, 'L');

$pdf->SetDrawColor(0,0,0);
$pdf->setY(86);
$pdf->Cell(5, 7,utf8_decode('Instrumento:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, utf8_decode($herra["descripcion_calibracion"]), 1, 1, '');
$pdf->setY(94);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Marca:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7,utf8_decode($herra["marcaofabri_calibracion"]), 1, 1, '');
$pdf->setY(102);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Modelo:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, utf8_decode($herra["pn_calibracion"]), 1, 1, '');
$pdf->setY(110);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Serie:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, utf8_decode($herra["numserie_calibracion"]), 1, 1, '');
$pdf->setY(118);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5, 7,utf8_decode('Identificación Interna:'), 0, 0, 'L');
$pdf->setX(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130, 7, utf8_decode($herra["codigo_calibracion"]), 1, 1);

$pdf->setY(124);
$pdf->setX(138);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5, 7,utf8_decode('Puntos Específicos:'), 0, 0, 'L');

$pdf->SetFont('Arial','',12);
$pdf->setY(130);
$pdf->Cell(8, 5, '', 1, 0, 'L');
$pdf->Cell(5, 7,utf8_decode('Calibración'), 0, 0, 'L');
$pdf->setX(50);
$pdf->Cell(8, 5, '', 1, 0, 'L');
$pdf->Cell(5, 7,utf8_decode('Verificación'), 0, 0, 'L');
$pdf->setX(90);
$pdf->Cell(8, 5, '', 1, 0, 'L');
$pdf->Cell(5, 7,utf8_decode('Ajuste'), 0, 0, 'L');
$pdf->setX(115);
$pdf->Cell(85, 6, '', 1, 1, 'L');

$pdf->SetFont('Arial','B',11);
$pdf->Cell(5, 7,utf8_decode('NOTA:'), 0, 0, 'L');
$pdf->SetFont('Arial','',10);
$pdf->setX(23);
$pdf->Cell(5, 7,utf8_decode('Si el Cliente no indica puntos especificos se procedera de acuerdo a procedimiento especifico o norma:'), 0, 1, 'L');

$pdf->SetFont('Arial','',11);
$pdf->Cell(5, 7,utf8_decode('Accesorios Adjuntos'), 0, 1, 'L');
$pdf->Cell(190, 5, '', 1, 1, 'L',true);
$pdf->Cell(190, 5, '', 1, 1, 'L',true);
$pdf->Cell(190, 5, '', 1, 1, 'L',true);

$pdf->SetFont('Arial','',11);
$pdf->Cell(5, 7,utf8_decode('Estado del equipo'), 0, 1, 'L');
$pdf->Cell(190, 5, '', 1, 1, 'L',true);
$pdf->Cell(190, 5, '', 1, 1, 'L',true);

$pdf->SetFont('Arial','',11);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(5, 7,utf8_decode('Observaciones'), 0, 1, 'L');
$pdf->Cell(190, 5, '', 1, 1, 'L',true);
$pdf->Cell(190, 5, '', 1, 1, 'L',true);

$pdf->SetFont('Arial','BI',11);
$pdf->setY(201);
$pdf->Cell(5, 8,utf8_decode('Fecha de recepción'), 0, 0, 'L');
$pdf->setY(201);
$pdf->Cell(110, 8, '', 1, 0, 'L');
$pdf->Cell(5, 8,utf8_decode('Fecha de devolución'), 0, 0, 'L');
$pdf->setX(120);
$pdf->Cell(80, 8, '', 1, 1, 'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(5, 10,utf8_decode('Cliente'), 0, 0, 'L');
$pdf->setY(209);
$pdf->Cell(110, 17, '', 1, 0, 'L');
$pdf->Cell(5, 10,utf8_decode('Cliente'), 0, 0, 'L');
$pdf->setX(120);
$pdf->Cell(80, 17, '', 1, 1, 'L');

$pdf->SetFillColor(215,211,189);
$pdf->setY(226);
$pdf->Cell(115, 8,utf8_decode('Laboratorio'), 0, 0, 'L',true);
$pdf->setY(226);
$pdf->Cell(110, 8, '', 1, 0, 'L');
$pdf->Cell(80, 8,utf8_decode('Laboratorio'), 0, 0, 'L',true);
$pdf->setX(120);
$pdf->Cell(80, 8, '', 1, 1, 'L');

$pdf->setY(232);
$pdf->Cell(5, 10,utf8_decode('Observación'), 0, 0, 'L');
$pdf->setY(240);
$pdf->Cell(190, 9, '', 1, 1, 'L',true);

$pdf->setY(247);
$pdf->SetFont('Arial','BI',11);
$pdf->Cell(5, 10,utf8_decode('NOTA: El laboratorio no sera responsable de cualquier daño que pudiera sufrir el instrumento en el '), 0, 1, 'L');
$pdf->setY(251);
$pdf->Cell(5, 10,utf8_decode('traslado o manipulacion una vez entregado'), 0, 1, 'L');

$pdf->setY(258);
$pdf->Cell(5, 10,utf8_decode('Dirección Av, Killman Zona Aeropuerto Jorge Wilsterman Cel. 68496201 - 72256254'), 0, 0, 'L');
$pdf->setX(165);
$pdf->SetTextColor(0,73,255);
$pdf->Cell(5, 10,utf8_decode('metrologia@sae.aero'), 0, 1, 'L');





$pdf->Output();
