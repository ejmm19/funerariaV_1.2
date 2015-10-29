<?php
require('fpdf/fpdf.php');
include '../php/conexion.php';
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];

$pago = $_POST['pago'];


$cant1 = $_POST['cantidad1'];
$cant2 = $_POST['cantidad2'];
$cant3 = $_POST['cantidad3'];
$cant4 = $_POST['cantidad4'];
$cant5 = $_POST['cantidad5'];
$des1 = $_POST['descripcion1'];
$des2 = $_POST['descripcion2'];
$des3 = $_POST['descripcion3'];
$des4 = $_POST['descripcion4'];
$des5 = $_POST['descripcion5'];
$vu1 = $_POST['vu1'];
$vu2 = $_POST['vu2'];
$vu3 = $_POST['vu3'];
$vu4 = $_POST['vu4'];
$vu5 = $_POST['vu5'];
$nf = rand ( 1 ,1000 );
$vt1 = $cant1*$vu1;
$vt2 = $cant2*$vu2;
$vt3 = $cant3*$vu3;
$vt4 = $cant4*$vu4;
$vt5 = $cant5*$vu5;
$vtt = $vt1+$vt2+$vt3+$vt4+$vt5;
$id = 0;
if ($id==0) {
    $busqueda=mysql_query("SELECT * FROM clientes WHERE nombres = '$nombre'");
    $resultado=mysql_fetch_array($busqueda);
    $id = $resultado['identificacion'];
    $direccion = $resultado['direccion'];
    $apellidos = $resultado['apellidos'];
    
}



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    $this->Image('../img/LOGOTIPO.png',15,8,43);
    // Arial bold 15
    $this->SetFont('Arial','I',9);
    // Movernos a la derecha
    $this->Cell(77);
    // Título
    $this->Cell(30,1,utf8_decode('MARÍA LUIZA RUIZ C.'),'C');
    $this->Cell(50);
    $this->Cell(30,1,utf8_decode('Calle 15 No. 15-13'),'C');
    // Salto de línea
    $this->Ln(3);
    
    $this->Cell(80);    
    $this->Cell(30,1,utf8_decode('Nit: 64.584.106-0'),'C');
    $this->Cell(50);
    $this->Cell(30,1,utf8_decode('Tel: 766-20-44'),'C');
    $this->Ln(3);
    $this->Cell(75);
    $this->Cell(30,1,utf8_decode('REGIMEN SIMPLIFICADO'),'C');
    $this->Cell(54);
    $this->Cell(30,1,utf8_decode('PLANETA RICA'),'C');
    $this->Ln(3);
    $this->Cell(162);
    $this->Cell(30,1,utf8_decode('CÓRDOBA'),'C');
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
$pdf->SetFont('Times','',12); 
$pdf->Ln(30);
$pdf->Cell(0,10,utf8_decode("FECHA: $fecha                      TIPO DE PAGO: $pago          FACTURA DE VENTA N°: $nf"),0,1);
$pdf->Cell(0,10,utf8_decode("SEÑOR: $nombre $apellidos      IDENTIFICACIÓN: $id          DIRECCIÓN: $direccion"),0,1);
$pdf->Ln(35);
$pdf->Cell(27,10,' CANTIDAD',1);
$pdf->Cell(90,10,utf8_decode('                            DESCRIPCIÓN'),1);
$pdf->Cell(45,10,'   VALOR UNITARIO',1);
$pdf->Cell(32,10,'VR TOTAL',1);
$pdf->Ln(10);
$pdf->SetFont('Times','I',12);

$pdf->Cell(27,10,"           $cant1",1);
$pdf->Cell(90,10,utf8_decode($des1),1);
$pdf->Cell(45,10,"           $vu1",1);
$pdf->Cell(32,10,"           $vt1",1);
$pdf->Ln(10);

$pdf->Cell(27,10,"           $cant2",1);
$pdf->Cell(90,10,utf8_decode($des2),1);
$pdf->Cell(45,10,"           $vu2",1);
$pdf->Cell(32,10,"           $vt2",1);
$pdf->Ln(10);
$pdf->Cell(27,10,"           $cant3",1);
$pdf->Cell(90,10,utf8_decode($des3),1);
$pdf->Cell(45,10,"           $vu3",1);
$pdf->Cell(32,10,"           $vt3",1);
$pdf->Ln(10);
$pdf->Cell(27,10,"           $cant4",1);
$pdf->Cell(90,10,utf8_decode($des4),1);
$pdf->Cell(45,10,"           $vu4",1);
$pdf->Cell(32,10,"           $vt4",1);
$pdf->Ln(10);
$pdf->Cell(27,10,"           $cant5",1);
$pdf->Cell(90,10,utf8_decode($des5),1);
$pdf->Cell(45,10,"           $vu5",1);
$pdf->Cell(32,10,"           $vt5",1);
$pdf->Ln(20);
$pdf->Cell(146);
$pdf->Cell(1,10,"TOTAL",0);
$pdf->Cell(15);

$pdf->Cell(32,10,"   $ $vtt",1);
$pdf->Output('../pdf/facturas/'.$id.'.pdf');
$pdf->Output();
?>
<?php 

echo "listo";
 ?>











