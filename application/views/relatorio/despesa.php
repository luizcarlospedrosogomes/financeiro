<?php
	
	date_default_timezone_set('America/Sao_Paulo');
	$dataAtual = date('d/m/Y H:i');
	//$this->fpdf->Write(5,iconv('utf-8','iso-8859-1', 'Endereço: '));
	$this->fpdf->AddPage();
	$this->fpdf->SetFont('Arial','B',16);
	$this->fpdf->SetFont('Arial','B',15);
	$this->fpdf->Cell(80);
	$this->fpdf->Cell(30,10,'Financeiro '.ucwords($usuario).' emitido em '.$dataAtual ,0,0,'C');
	$this->fpdf->Ln(20);
	$this->fpdf->Cell(40,10,'Despesas');
	$this->fpdf->Ln();
   $header = array('Data', 'Despesa', 'Valor', 'Categoria');
   // Colors, line width and bold font
    $this->fpdf->SetFillColor(255,255,0);
    $this->fpdf->SetTextColor(0,0,0);
    $this->fpdf->SetDrawColor(128,0,0);
    $this->fpdf->SetLineWidth(.3);
    $this->fpdf->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->fpdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->fpdf->Ln();
    // Color and font restoration
    $this->fpdf->SetFillColor(224,235,255);
    $this->fpdf->SetTextColor(0);
    $this->fpdf->SetFont('');
    // Data
    $fill = false;
    foreach($listar_despesa->result_array() as $row)
    {
        $this->fpdf->Cell($w[0],6,$row['data'],'LR',0,'L',$fill);
        $this->fpdf->Cell($w[1],6,iconv('utf-8','iso-8859-1',$row['despesa']),'LR',0,'L',$fill);
        $this->fpdf->Cell($w[2],6,$row['valor'],'LR',0,'R',$fill);
        $this->fpdf->Cell($w[3],6,iconv('utf-8','iso-8859-1',$row['categoria']),'LR',0,'R',$fill);
        $this->fpdf->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->fpdf->Cell(array_sum($w),0,'','T');
	//$this->fpdf->SetY(-5);
    // Arial italic 8
    $this->fpdf->SetFont('Arial','I',8);
    // Page number
    $this->fpdf->Cell(0,10,'Pag. '.$this->fpdf->PageNo(),0,0,'C');
	$this->fpdf->Output();
?>