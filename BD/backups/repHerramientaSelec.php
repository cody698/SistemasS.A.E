<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../modelo/conexion.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

/* ============================= 1 */
$id = $_POST["seleccionados"];
/* //var_dump($id); */ 
$idArreglos = trim($id,"{ }");
$resultado = explode(",",$idArreglos);

$fechaInforme = $_POST["fechaInforme"];
$numInforme = $_POST["numInforme"];
$respAlmacen = $_POST["respAlmacen"];
$repTecnico = $_POST["repTecnico"];
$encargadoInforme = $_POST["encargadoInforme"];
$asuntoInforme = $_POST["asuntoInforme"];
$descInforme = $_POST["descInforme"];

/* ============================= 2 */
/* foreach ($id as $value){
    $herra = ControladorHerramientas::ctrSelecHerramientas($value);
    var_dump($herra);
} */

$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 1);
$pdf->SetMargins(5, 5, 5);

$pdf->SetFont('Arial', 'B', 20);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Image('../../assest/imagenes/gota.jpg', 8, 105, 200);
$pdf->Cell(190, 30, 'INFORME', 0, 2, 'C');
$pdf->setY(33);
$pdf->SetFont('Arial', '', 9);
$pdf->setY(10);
$pdf->setX(160);
$pdf->SetFillColor(215, 211, 189);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 5, 'CERTIFICACIONES', 0, 1, 'C');
$pdf->setY(14);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC BOLIVIA OMA No N-017', 0, 2, 'C');
$pdf->setY(18);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'AEROCIVIL COLOMBIA TARE No. 042', 0, 2, 'C');
$pdf->setY(22);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC CHILE E-448', 0, 2, 'C');
$pdf->setY(26);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC ECUADOR No. 077', 0, 2, 'C');
$pdf->setY(30);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC PERU OMAE No. 019', 0, 2, 'C');
$pdf->setY(34);
$pdf->setX(160);
$pdf->Cell(35, 5, 'AHAC HONDURAS No. CTAE-145-032 HR', 0, 2, 'C');

$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 30, '', 1, 0, 'C');
$pdf->Cell(75, 30, '', 1, 0, 'C');
$pdf->Cell(66, 30, '', 1, 1, 'C');

$pdf->setY(44);
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(160, 8, 'LUGAR Y FECHA: Cochabamba, '.$fechaInforme, 1, 0, 'L');
$pdf->Cell(40, 8, 'No.:', 1, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-35);
$pdf->Cell(40, 8, $numInforme, 0, 1, 'L');

$pdf->setY(52);
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'DE: ', 0, 0, 'L');

$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-198);
$pdf->Cell(200, 8, utf8_decode( $respAlmacen) , 0, 1, 'L');

$pdf->SetFont('Helvetica', 'B', 10);
$pdf->SetX(8);
$pdf->Cell(200, 8, 'A: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-198);
$pdf->Cell(200, 8, utf8_decode( $repTecnico) , 0, 1, 'L');
$pdf->setY(52);
$pdf->SetX(8);
$pdf->Cell(200, 16, '', 1, 1, 'L');

$pdf->SetX(15);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 10, 'ASUNTO: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-180);
$pdf->Cell(200, 10, utf8_decode( $asuntoInforme), 0, 1, 'L');
$pdf->SetX(15);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 6, utf8_decode($descInforme), 0, 1, 'L');

$pdf->Cell(10, 5, '', 0, 1, 'C', true);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(10);
$pdf->SetFillColor(61, 140, 205);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(12, 8, 'ITEM', 1, 0, 'C', true);

$pdf->Cell(54, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', true);
$pdf->Cell(40, 8, utf8_decode('P/N'), 1, 0, 'C', true);
$pdf->Cell(15, 8, utf8_decode('CANT.'), 1, 0, 'C', true);
$pdf->Cell(20, 8, utf8_decode('UNIDAD'), 1, 0, 'C', true);
$pdf->Cell(54, 8, utf8_decode('OBSERVACIÓN'), 1, 1, 'C', true);

/* //==========================================================================
$pdf->Cell(200, 10, '', 0, 1, 'L');
//REPORTE ANTIGUO
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(61, 140, 205);
//$pdf->setY(200);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(12);
$pdf->Cell(10, 8, 'ITEM', 1, 0, 'C', true);
$pdf->Cell(44, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', true);
$pdf->Cell(23, 8, utf8_decode('NRO DE PARTE'), 1, 0, 'C', true);
$pdf->Cell(21, 8, utf8_decode('NRO DE SERIE'), 1, 0, 'C', true);
$pdf->Cell(17, 8, utf8_decode('CÓDIGO'), 1, 0, 'C', true);
$pdf->Cell(21, 8, utf8_decode('FECHA CAL.'), 1, 0, 'C', true);
$pdf->Cell(20, 8, utf8_decode('FECHA VENC.'), 1, 0, 'C', true);
$pdf->Cell(31, 8, utf8_decode('UBICACIÓN'), 1, 1, 'C', true); */

$pdf->SetFont('Helvetica', 'B', 7);

function limitar_cadena($cadena, $limite, $sufijo){
	if(strlen($cadena) > $limite){
		return substr($cadena, 0, $limite) . $sufijo;
	}
	return $cadena;
}

foreach ($resultado as $value) {
    $herra = ControladorHerramientas::ctrSelecHerramientas($value);
    $pdf->SetFont('Helvetica', '', 8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->setX(10);
    $pdf->Cell(12, 8, utf8_decode($herra["id_controlherramientas"]), 1, 0);
    $pdf->Cell(54, 8, limitar_cadena($herra["descripcion_controlherramientas"], 29, "...") , 1, 0);
    $pdf->Cell(40, 8, $herra["pn_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(15, 8, $herra["cantidad_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(20, 8, $herra["unidad_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(54, 8, $herra["ubicacion_controlherramientas"], 1, 1, 'C');
}

//CUADRO DE ASUNTO
$pdf->setY(68);
$pdf->SetX(8);
$pdf->Cell(200, 170, '', 1, 1, 'L');
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'NOMBRE:', "RTL", 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-190);
$pdf->Cell(200, 8, utf8_decode($encargadoInforme), "", 1, 'L');
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'FIRMA:', "RBL", 1, 'L');
$pdf->Cell(200, 5, '', "", 1, 'L');

date_default_timezone_set('America/La_Paz');
//PIE DE PÁGINA
$pdf->SetY(-20);
$pdf->SetX(8);
$pdf->SetFont("times", "", 8);
$pdf->Cell(65, 8, 'FORM SAESM104', 1, 0, 'C');
$pdf->Cell(70, 8, 'REV.05', 1, 0, 'C');
$pdf->Cell(65, 8, utf8_decode("FECHA: ").date('11/03/2022'), 1, 0, 'C');

$pdf->Output();