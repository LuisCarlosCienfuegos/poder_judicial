<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM tbl_solicitantes";
	$resultado = $mysqli->query($query);
	
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'id',1,0,'C',1);
	$pdf->Cell(70,6,'nombre',1,0,'C',1);
	$pdf->Cell(70,6,'telefono',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['id']),1,0,'C');
		$pdf->Cell(70,6,$row['nombre'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['telefono']),1,1,'C');
	}
	$pdf->Output();
?>