<?php
//============================================================+
// File name   : example_039.php
// Begin       : 2008-10-16
// Last Update : 2014-01-13
//
// Description : Example 039 for TCPDF class
//               HTML justification
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML justification
 * @author Nicola Asuni
 * @since 2008-10-18
 */


//Inicio
$nombreCiudad =  $_POST['nombreCiudad'];
$diaDelMes = $_POST['diaDelMes'];
$mesDelAno =  $_POST['mesDelAno'];
$anoContrato = $_POST['anoContrato'];

//Comparecientes
$nombreVendedor =  $_POST['nombreVendedor'];
$numeroRUCVendedor =  $_POST ['numeroRUCVendedor'];
$RepresentanteLegalVendedor = $_POST ['RepresentanteLegalVendedor'];
$IdentificacionVendedor =  $_POST['IdentificacionVendedor'];
$nacionalidadVendedor =  $_POST['nacionalidadVendedor'];
$ciudadDomicilioVendedor =  $_POST['ciudadDomicilioVendedor'];
$domicilioVendedor =  $_POST['domicilioVendedor'];


$nombreComprador =  $_POST['nombreComprador'];
$numeroIdentificacionComprador =  $_POST['numeroIdentificacionComprador'];
$estadoCivilComprador =  $_POST['estadoCivilComprador'];
$nacionalidadComprador =  $_POST['nacionalidadComprador'];
$ciudadDomicilioComprador =  $_POST['ciudadDomicilioComprador'];
$domicilioComprador =  $_POST['domicilioComprador'];

//Antecedentes
$marca =  $_POST['marca'];
$modelo =  $_POST['modelo'];
$anoVehiculo =  $_POST['anoVehiculo'];
$motor =  $_POST['motor'];
$chasis =  $_POST['chasis'];
$placas =  $_POST['placas'];
$color =  $_POST['color'];


//Precio
$montoEnLetras =  $_POST['montoEnLetras'];
$montoEnNumeros =  $_POST['montoEnNumeros'];


//Forma de pago
$formaDePago =  $_POST['formaDePago'];


// Include the main TCPDF library (search for installation path).
require_once('../TCPDF/tcpdf.php');



// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 039');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 039', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', 'B', 20);

//$pdf->Write(0, 'CONTRATO DE COMPRA VENTA VEHÍCULO', '', 0, 'L', true, 0, false, false, 0);


// Instanciation of inherited class


// create some HTML content
$html = '


<h2 style="text-align: center;"><strong>CONTRATO DE COMPRAVENTA DE VEH&Iacute;CULO</strong></h2>
<p style="padding-left: 30px;">En la ciudad de '.$nombreCiudad.', a los '.$diaDelMes.' d&iacute;as del mes de '.$mesDelAno.' de '.$anoContrato.', las partes de forma libre y voluntaria suscriben el presente contrato.</p>
<h3 style="text-align: center;">I. COMPARECIENTES</h3>
<ol>
<li style="text-align: justify;">Por una parte, '.$nombreVendedor.', con c&eacute;dula de ciudadan&iacute;a No. '.$numeroIdentificacionVendedor.', de estado civil '.$estadoCivilVendedor.', nacionalidad '.$nacionalidadVendedor.', residente en la ciudad de '.$ciudadDomicilioVendedor.' y con domicilio en '.$domicilioVendedor.', por sus propios y personales derechos a quien para efectos del presente contrato se le denominar&aacute; &ldquo;VENDEDOR&rdquo;; y,</li>
<li style="text-align: justify;">Por otra parte, '.$nombreComprador.', con c&eacute;dula de ciudadan&iacute;a No. '.$numeroIdentificacionComprador.', de estado civil '.$estadoCivilComprador.', nacionalidad '.$nacionalidadComprador.', residente en la ciudad de '.$ciudadDomicilioComprador.' y con domicilio en '.$domicilioComprador.', por sus propios y personales derechos, a quien para los efectos del presente contrato se le denominar&aacute; &ldquo;COMPRADOR&rdquo;</li>
</ol>
<h3 style="text-align: center;">II. ANTECEDENTES</h3>
<ol>
<li style="text-align: justify;">EL VENDEDOR, es propietario del veh&iacute;culo de las siguientes caracter&iacute;sticas:&nbsp;
<p><b>Marca: </b>'.$marca.' <br>
<b>Modelo: </b>'.$modelo.' <br>
<b>A&ntilde;o: </b>'.$anoVehiculo.' <br>
<b>Motor N&ordm;: </b>'.$motor.' <br>
<b>Chasis: </b>'.$chasis.' <br>
<b>Placas: </b> '.$placas.' <br>
<b>Color: </b>'.$color.' <br>
<li style="text-align: justify;">EL VENDEDOR declara que sobre el veh&iacute;culo de su propiedad no pesa gravamen alguno, prohibici&oacute;n de enajenar.</li>
<li style="text-align: justify;">EL VENDEDOR declara que el veh&iacute;culo se encuntra en perfecto estado y que periodicamente ha sido sujeto de mantenimientos y chequeos mec&aacute;nicos para su &oacute;ptimo funcionamiento.</li>
</ol>
<h3 style="text-align: center;">III. OBJETO</h3>
<ol>
<li>Las partes de com&uacute;n acuerdo y por su convenir a sus intereses celebran el presente contrato de compraventa de veh&iacute;culo.</li>
<li>EL VENDEDOR da en venta y perpetua enajenaci&oacute;n a favor de EL COMPRADORA, el veh&iacute;culo descrito en la cl&aacute;usula II del presente contrato.</li>
<li>EL VENDEDOR se compromete a efectuar la entrega de toda la documentaci&oacute;n inherente al veh&iacute;culo para efectos del traspaso de dominio.</li>
</ol>
<h3 style="text-align: center;">IV. DECLARACI&Oacute;N</h3>
<ol>
<li style="text-align: justify;">EL COMPRADORA declara que recibe el veh&iacute;culo en perfectas condiciones y que ha sido revisado recibiendolo en perfecto estado, renunciando a reclamos por vicios redivitorios. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>
</ol>
<h3 style="text-align: center;">V. PRECIO&nbsp;</h3>
<ol>
<li style="text-align: justify;">
<p>El precio del objeto del presente contrato es de '.$montoEnLetras.' D&Oacute;LARES DE LOS ESTADOS UNIDOS DE AM&Eacute;RICA (USD $'.$montoEnNumeros.') que EL COMPRADOR entrega a AL VENDEDOR en '.$formaDePago.' y a su entera satisfacci&oacute;n.</p>
</li>
</ol>
<h3 style="text-align: center;">VI. RATIFICACI&Oacute;N</h3>
<ol>
<li style="text-align: justify;">
<p>Las partes aceptan la vigencia y validez del presente instrumento por contener estipulaciones hechas en sus mutuos beneficios e intereses y en la buena fe de que se cumplir&aacute;n cada una con las obligaciones asumidas, para constancia de lo cual y fiel cumplimiento de lo estipulado, firman en dos ejemplares de igual tenor y valor.</p>
</li>
</ol>
<h1>&nbsp;</h1>
<p>&nbsp;</p>
<table style="margin-left: auto; margin-right: auto; width: 595.5px;">
<tbody>
<tr style="height: 34px;">
<td style="width: 278px; height: 0px;">
<p style="padding-left: 60px; text-align: center">'.$nombreVendedor.'</p>
</td>
<td style="width: 303.5px; height: 0px;">
<p style="padding-left: 90px; text-align: center">'.$nombreComprador.'</p>
</td>
</tr>
<tr style="height: 33.15625px;">
<td style="width: 278px; height: 33.15625px;">
<p style="padding-left: 60px; text-align: center">'.$numeroIdentificacionVendedor.'</p>
</td>
<td style="width: 303.5px; height: 33.15625px;">
<p style="padding-left: 90px; text-align: center">'.$numeroIdentificacionComprador.'</p>
</td>
</tr>
</tbody>
</table>
<h1>&nbsp;</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center;">&nbsp;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>';

// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, true, 0, true, true);

$pdf->Ln();

// set UTF-8 Unicode font
$pdf->SetFont('dejavusans', '', 10);

// output the HTML content
//$pdf->writeHTML($html, true, 0, true, true);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_039.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
