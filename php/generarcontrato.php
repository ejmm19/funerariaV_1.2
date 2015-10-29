<?php
require('fpdf/fpdf.php');
$tipo = strtoupper($_POST['tipo']);
$fechanac7 = $_POST['fechanac7'];
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$fechanaci = $_POST['fechanaci'];
$vigencia = $_POST['vigencia'];
$identificacion = $_POST['identificacion'];
$asesor = $_POST['asesor'];
$cobrador = $_POST['cobrador'];
$zona = $_POST['zona'];
$barrio = $_POST['barrio'];
$direccioncobro = $_POST['direccioncobro'];
$municipio = $_POST['municipio'];
$diascobro = $_POST['diascobro'];
$telresidencia = $_POST['telresidencia'];
$telfamiliar = $_POST['telfamiliar'];
$valorcuota = $_POST['valorcuota'];
$teloficina = $_POST['teloficina'];
$celular = $_POST['celular'];
$valorletras = $_POST['valorletras'];
$parentesco1 = $_POST['parentesco1'];
$nomape1 = $_POST['nomape1'];
$cedula1 = $_POST['cedula1'];
$fechanac1 = $_POST['fechanac1'];
$parentesco2 = $_POST['parentesco2'];
$nomape2 = $_POST['nomape2'];
$cedula2 = $_POST['cedula2'];
$fechanac2 = $_POST['fechanac2'];
$parentesco3 = $_POST['parentesco3'];
$nomape3 = $_POST['nomape3'];
$cedula3 = $_POST['cedula3'];
$fechanac3 = $_POST['fechanac3'];
$parentesco4 = $_POST['parentesco4'];
$nomape4 = $_POST['nomape4'];
$cedula4 = $_POST['cedula4'];
$fechanac4 = $_POST['fechanac4'];
$parentesco5 = $_POST['parentesco5'];
$nomape5 = $_POST['nomape5'];
$cedula5 = $_POST['cedula5'];
$fechanac5 = $_POST['fechanac5'];
$parentesco6 = $_POST['parentesco6'];
$nomape6 = $_POST['nomape6'];
$cedula6 = $_POST['cedula6'];
$fechanac6 = $_POST['fechanac6'];
$parentesco7 = $_POST['parentesco7'];
$nomape7 = $_POST['nomape7'];
$cedula7 = $_POST['cedula7'];
$NN = rand(1,9999);


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    $this->Image('../img/LOGOTIPO.png',15,8,43);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
      
    // Título
    
    $this->Cell(90);
    $this->Ln(5);
    $this->Image('../img/logo.png',150,20,43);
    // Salto de línea
    $this->Ln(3);
    
    
    
   
    
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Ln(7); 
$pdf->Cell(70);
$pdf->SetTextColor(50,38,208);
$pdf->Cell(10,1,'CONTRATO INDIVIDUAL','C');
$pdf->Ln(5); 
$pdf->Cell(75);
$pdf->Cell(10,1,'FAMILIA   '.$tipo,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Ln(35);
$pdf->Cell(5);
$pdf->SetFont('Times','',10);
$pdf->Cell(10,1,'FECHA   '.$fecha.'                                                                VIGENCIA A PARTIR DE LAS 24 HORAS :   '.$vigencia);
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('SEÑOR(a) :    '.$nombre.'              CEDULA :   '.$identificacion.'                    FECHA DE NAC. :'.$fechanaci));
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('ASESOR :    '.$asesor.'                                                    COBRADOR :   '.$cobrador));
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('DIRECCION DE COBRO :    '.$direccioncobro.'                        ZONA :   '.$zona.'                         MUNICIPIO :    '.$municipio));
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('BARRIO :   '.$barrio.'                  DIAS DE COBRO :    '.$diascobro.'                           TEL. RES. :   '.$telresidencia));
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('TEL. OFICINA :    '.$teloficina.'                 TEL. DE FAMILIAR :   '.$telfamiliar.'        CELULAR :    '.$celular));
$pdf->Ln(9);
$pdf->Cell(5);
$pdf->Cell(10,1,utf8_decode('VALOR DE LA CUOTA :   '.$valorcuota.'                       VALOR EN LETRAS :    '.$valorletras));
$pdf->Ln(25);
$pdf->Cell(45);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(10,1,utf8_decode('RELACIÓN DE CONTRATANTES POR DESIGNACIÓN'));
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);

$pdf->Ln(15);
$pdf->Cell(5);
$pdf->Cell(31,10,utf8_decode("PARENTÉSCO"),1);
$pdf->Cell(71,10,"      NOMBRES Y APELLIDOS",1);
$pdf->Cell(31,10,"   CEDULA",1);
$pdf->Cell(51,10,"FECHA DE NACIMIENTO",1);

$pdf->Ln(10);
$pdf->SetFont('Times','',10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco1),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape1),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula1),1);
$pdf->Cell(51,10,"                   ".$fechanac1,1);

$pdf->Ln(10);
$pdf->Cell(5);

$pdf->Cell(31,10,"        ".utf8_decode($parentesco2),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape2),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula2),1);
$pdf->Cell(51,10,"                   ".$fechanac2,1);

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco3),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape3),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula3),1);
$pdf->Cell(51,10,"                   ".$fechanac3,1);

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco4),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape4),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula4),1);
$pdf->Cell(51,10,"                   ".$fechanac4,1);

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco5),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape5),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula5),1);
$pdf->Cell(51,10,"                   ".$fechanac5,1);
$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco6),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape6),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula6),1);
$pdf->Cell(51,10,"                   ".$fechanac6,1);

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(31,10,"        ".utf8_decode($parentesco7),1);
$pdf->Cell(71,10,"       ".utf8_decode($nomape7),1);
$pdf->Cell(31,10,"    ".utf8_decode($cedula7),1);
$pdf->Cell(51,10,"                   ".$fechanac7,1);


$pdf->Ln(25);
$pdf->Cell(7);
$pdf->Cell(10,1,'___________________________                     ___________________________                      ___________________________');
$pdf->Ln(6);
$pdf->Cell(7);
$pdf->Cell(10,1,'    Contratante firma y C.C                                       Firma del Autorizado                                               Firma Asesor');
$pdf->Output();
$pdf->Output('../pdf/contratos/'.$identificacion.'.pdf');







/**/

?>











