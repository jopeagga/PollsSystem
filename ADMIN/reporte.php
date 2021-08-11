<?php

	require "FPDF/fpdf.php";

	class PDF extends FPDF
	{
		function Header()
		{
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'REPORTE',0,0,'C');
			$this->Ln(20);
		}

		
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	require('../conexion.php');


	$id_encuesta = 8;

	$consulta = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta'";
	$resultados2 = $con->query($consulta);

	while ($row2 = $resultados2->fetch_assoc()) {
		
		$id_pregunta = $row2['id_pregunta'];

		$query = "SELECT preguntas.id_pregunta, preguntas.titulo,COUNT('preguntas.titulo') as count, opciones.valor FROM opciones INNER JOIN preguntas ON opciones.id_pregunta=preguntas.id_pregunta INNER JOIN resultados ON opciones.id_opcion=resultados.id_opcion WHERE preguntas.id_pregunta = '$id_pregunta' GROUP BY opciones.valor ORDER BY preguntas.id_pregunta";
		$resultados = $con->query($query);

		$pdf = new PDF();
	
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(50,6,'TITULO',1,0,'C',1);
		$pdf->Cell(80,6,'DESCRIPCION',1,0,'C',1);
		$pdf->Cell(60,6,'CANTIDAD DE VOTOS',1,1,'C',1);

		$pdf->SetFont('Arial','',10);
		$pdf->Cell(50,6,'TITULO',1,0,'C',1);
		$pdf->Cell(80,6,'DESCRIPCION',1,0,'C',1);
		$pdf->Cell(60,6,'CANTIDAD DE VOTOS',1,1,'C',1);
		$i = 1;

		while ($row = $resultados->fetch_assoc()) {
			$pdf->Cell(50,6,$row['titulo'],1,0,'C',1);
			$pdf->Cell(80,6,$row['valor'],1,0,'C',1);
			$pdf->Cell(60,6,$row['count'],1,1,'C',1);
			$i++;
		}/*87*/


		$opciones = $i - 1;

		//$pdf->Cell(50,6,$opciones,1,0,'C',1);

		$pdf->Output();

	}


 ?>