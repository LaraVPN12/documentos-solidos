<?php
require ('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        $this-> SetFont('Arial', 'I', 10);
        $this-> MultiCell(0,10,utf8_decode('Kevin Josué Lara Menjívar'));
        $this-> ln();
    }
    function Footer() {
        $this-> SetY(-15);
        $this-> SetFont('Arial', 'I', 10);
        $this-> Cell(0,10,'Page'.$this->PageNo(),0,0,'C');
    }
}

$fpdf = new PDF();
$fpdf-> AddPage('P', 'A3');
$fpdf-> SetTitle('Practica Evaluada II');
$fpdf-> SetAuthor('Kevin Lara');
$fpdf-> SetFont('Helvetica', 'b', 20);
$fpdf-> MultiCell(0,10,utf8_decode('2ª Practica Evaluada'),0, 'C',false);
$fpdf-> ln();
$fpdf-> SetFont('Arial','i',12);
$fpdf-> MultiCell(0,10,utf8_decode('
Con diez cañones por banda,
viento en popa a toda vela,
no corta el mar, sino vuela
un velero bergantín;
bajel pirata que llaman,
por su bravura, el Temido,
en todo mar conocido
del uno al otro confín.'),0);
$fpdf-> AddPage('L', 'legal');
$fpdf-> Image('vaticano.jpg',130,30,100,50);
$fpdf-> ln();
$fpdf-> ln();
$fpdf-> ln();
$fpdf-> ln();
$fpdf-> ln();
$fpdf-> ln();
$fpdf-> SetFont('Times','',11);
$fpdf-> MultiCell(0,10,utf8_decode('¡Alimenten y propaguen el fuego de Cristo que tienen en ustedes! Lo dijo el Papa Francisco esta mañana al recibir en audiencia en el Vaticano a los jóvenes participantes en el XI Forum Internacional de Jóvenes, que tuvo lugar en Ciampino, a pocos kilómetros de Roma en la Casa “El Carmelo”. Tres días de encuentro organizados por el Dicasterio para los Laicos, la Familia y la Vida con el objetivo de promover la implementación del Sínodo 2018 centrado en el tema: Los jóvenes, la fe y el discernimiento vocacional.
'),0,'J',false);
$fpdf-> ln();
$fpdf-> SetFont('Arial','b',12);
$fpdf-> Cell(50,10,'Autor',1,0,'C');
$fpdf-> Cell(70,10,'Libro',1,0,'C');
$fpdf-> Cell(20,10,utf8_decode('Año'),1,0,'C');
$fpdf-> SetFont('Arial','',12);
$fpdf-> ln();
$fpdf-> Cell(50,10,'Miguel de Cervantes',1,0,'C');
$fpdf-> Cell(70,10,'Quijote de la Mancha',1,0,'C');
$fpdf-> Cell(20,10,'1605',1,0,'C');
$fpdf-> ln();
$fpdf-> Cell(50,10,'Milan Kundera',1,0,'C');
$fpdf-> Cell(70,10,'Insoportable levedad del ser',1,0,'C');
$fpdf-> Cell(20,10,'1984',1,0,'C');
$fpdf-> ln();
$fpdf-> Cell(50,10,'Juan Pablo II',1,0,'C');
$fpdf-> Cell(70,10,'Salvifici Doloris',1,0,'C');
$fpdf-> Cell(20,10,'1984',1,0,'C');
$fpdf-> Output('', 'DocPDFDWSL2022.pdf');