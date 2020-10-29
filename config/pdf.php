<?php

require_once('fpdf182/fpdf.php');

class PDF extends FPDF
{
    function BasicTable($header, $data)
    {
        // Header
        foreach ($header as $col)
            $this->Cell(31.5, 7, $col, 1);
        $this->Ln();
        // Data
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(31.5, 6, $col, 1);
            $this->Ln();
        }
    }

    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(1);
        $this->Cell(0, 10, utf8_decode('Relatório de Jogos'), 0, 0, 'C');
        $this->Ln(20);
    }
}
