<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../modelo/conexion.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

/* ============================= 1 */
$id = $_GET["id"];

$info = ControladorHerramientas::ctrInfoInforme($id);
/* ----------------------------------------------------- */

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
$pdf->Cell(160, 8, 'LUGAR Y FECHA: Cochabamba, ' . $info['fecha_informe'], 1, 0, 'L');
$pdf->Cell(40, 8, 'No.:', 1, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-35);
$pdf->Cell(40, 8, $info['num_informe'], 0, 1, 'L');

$pdf->setY(52);
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'DE: ', 0, 0, 'L');

$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-198);
$pdf->Cell(200, 8, utf8_decode($info['de_informe']), 0, 1, 'L');

$pdf->SetFont('Helvetica', 'B', 10);
$pdf->SetX(8);
$pdf->Cell(200, 8, 'A: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-198);
$pdf->Cell(200, 8, utf8_decode($info['a_informe']), 0, 1, 'L');
$pdf->setY(52);
$pdf->SetX(8);
$pdf->Cell(200, 16, '', 1, 1, 'L');

$pdf->SetX(15);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 10, 'ASUNTO: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-180);
$pdf->Cell(200, 10, utf8_decode($info['asunto_informe']), 0, 1, 'L');
$pdf->SetX(15);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 6, utf8_decode($info['conclusion_informe']), 0, 1, 'L');

$pdf->Cell(10, 5, '', 0, 1, 'C', true);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(10);
$pdf->SetFillColor(61, 140, 205);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(12, 8, 'ITEM', 1, 0, 'C', true);

$pdf->Cell(54, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', true);
$pdf->Cell(17, 8, utf8_decode('P/N'), 1, 0, 'C', true);
$pdf->Cell(17, 8, utf8_decode('SERIE'), 1, 0, 'C', true);
$pdf->Cell(17, 8, utf8_decode('CODIGO'), 1, 0, 'C', true);
$pdf->Cell(30, 8, utf8_decode('MARCA'), 1, 0, 'C', true);
$pdf->Cell(12, 8, utf8_decode('CANT.'), 1, 0, 'C', true);
$pdf->Cell(15, 8, utf8_decode('UNIDAD'), 1, 0, 'C', true);
$pdf->Cell(22, 8, utf8_decode('FECH VENC.'), 1, 1, 'C', true);

$pdf->SetFont('Helvetica', 'B', 7);

function limitar_cadena($cadena, $limite, $sufijo)
{
    if (strlen($cadena) > $limite) {
        return substr($cadena, 0, $limite) . $sufijo;
    }
    return $cadena;
}

$herramientaIndividual = explode(',', $info['herra_seleccionados']);

foreach ($herramientaIndividual as $value) {
    $herra = ControladorHerramientas::ctrSelecHerramientas($value);
    $pdf->SetFont('Helvetica', '', 8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->setX(10);
    $pdf->Cell(12, 8, utf8_decode($herra["id_controlherramientas"]), 1, 0);
    $pdf->Cell(54, 8, limitar_cadena($herra["descripcion_controlherramientas"], 23, "..."), 1, 0);
    $pdf->Cell(17, 8, $herra["pn_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(17, 8, $herra["numserie_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(17, 8, $herra["codigo_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(30, 8, $herra["marcaofabri_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(12, 8, $herra["cantidad_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(15, 8, $herra["unidad_controlherramientas"], 1, 0, 'C');
    //fecha de caducidad - pintado
    date_default_timezone_set("America/La_Paz");
    $fecha1 = new DateTime($fecha = date("Y-m-d"));
    $fecha2 = new DateTime($herra["fechavenci_controlherramientas"]);
    $diferencia = $fecha1->diff($fecha2);
    $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);
    if ($totalDias <= 10 and $totalDias >= 1) {
        $pdf->SetFillColor(255, 221, 51);
        $pdf->Cell(20, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    } elseif ($totalDias < 1) {
        $pdf->SetFillColor(223, 50, 26);
        $pdf->Cell(20, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    } else {
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(20, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    }


    $pdf->Cell(2, 8, "", 1, 1, 'C');
}

//CUADRO DE ASUNTO
$pdf->SetTextColor(0, 0, 0);
$pdf->setY(68);
$pdf->SetX(8);
$pdf->Cell(200, 170, '', 1, 1, 'L');
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'NOMBRE:', "RTL", 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-190);
$pdf->Cell(200, 8, utf8_decode($info['encargado_informe']), "", 1, 'L');
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
$pdf->Cell(65, 8, utf8_decode("FECHA: ") . date('11/03/2022'), 1, 0, 'C');

$pdf->Output();
