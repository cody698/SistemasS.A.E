<?php
require_once "../../assest/FPDF/fpdf.php";
require_once "../../controlador/autorizacionControlador.php";
require_once "../../modelo/autorizacionModelo.php";

$id=$_GET["id"];

$autorizacion=controladorAutorizacion::ctrInfoAutorizacion($id);


$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(100,20,'Sistema Tramite', 0, 1);
$pdf->Line(10, 25, 180, 25);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,20,'Nombre:', 0, 1);
$pdf->Cell(100,20,utf8_decode($autorizacion["nombre_cliente"]." ".$autorizacion["apellido_pat_cliente"]." ".$autorizacion["apellido_mat_cliente"]), 0, 1);

$pdf->Cell(100,20,'Firma:', 0, 1);
//renderiza el codigo de la imagen
$firmaAutorizacion = base64_decode(preg_replace('/^[^,]*,/', '', $autorizacion['firma']));

//transforma el codigo renderizado a imagen y la pone en memoria
file_put_contents($autorizacion["id_autorizacion"].'.png', $firmaAutorizacion);
//imprime la imagen en pfd
$pdf->Image($autorizacion["id_autorizacion"].'.png', 30, 80, -300);

$pdf->Output();
?>