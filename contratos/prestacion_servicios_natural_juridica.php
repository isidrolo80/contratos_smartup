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
$numeroIdentificacionVendedor =  $_POST['numeroIdentificacionVendedor'];
$nombreComprador =  $_POST['nombreComprador'];
$numeroIdentificacionComprador =  $_POST['numeroIdentificacionComprador'];

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
$html = '<style type="text/css">
	
h1 { font-family: Garamond; font-size: 1px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 0px; } h3 { font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: bold; line-height: 15px; } p { font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18px; }
	
</style>
<h2 style="text-align: center;">CONTRATO DE COMPRAVENTA DE VEH&Iacute;CULO</h2>
<p style="padding-left: 30px;">En la ciudad de '.$nombreCiudad.', a los '.$diaDelMes.' d&iacute;as del mes de '.$mesDelAno.' de '.$anoContrato.', las partes de forma libre y voluntaria suscriben el presente contrato:</p>
<h3 style="text-align: center;">I. COMPARECIENTES</h3>
<ol style="text-align: justify;">
<li>
<p>Por una parte, '.$nombreVendedor.', por sus propios y personales derechos a quien para efectos del presente contrato se le denominar&aacute; &ldquo;VENDEDOR&rdquo;, y;</p>
</li>
<li>
<p>Por otra parte, '.$nombreComprador.' por sus propios y personales derechos, a quien para los efectos del presente contrato se le denominar&aacute; &ldquo;COMPRADOR&rdquo;.</p>
</li>
</ol>
<h3 style="text-align: center;">II. ANTECEDENTES</h3>
<ol style="text-align: justify;">
<li>
<p>EL VENDEDOR, es propietario del veh&iacute;culo de las siguientes caracter&iacute;sticas:</p>
<ol style="list-style-type: lower-alpha;">
<li>
<p>Marca: '.$marca.'</p> 
</li>
<li>
<p>Modelo: '.$modelo.'</p> 
</li>
<li>
<p>A&ntilde;o: '.$anoVehiculo.'</p> 
</li>
<li>
<p>Motor N&ordm;: '.$motor.'</p> 
</li>
<li>
<p>Chasis: '.$chasis.'</p> 
</li>
<li>
<p>Placas: '.$placas.'</p> 
</li>
<li>
<p>Color: '.$color.'</p> 
</li>
</ol>
</li>
<li>
<p>EL VENDEDOR declara que sobre el veh&iacute;culo de su propiedad no pesa gravamen alguno, prohibici&oacute;n de enajenar.</p>
</li>
<li>
<p>EL VENDEDOR declara que el veh&iacute;culo se encuentra en perfecto estado y que peri&oacute;dicamente ha sido sujeto de mantenimientos y chequeos mec&aacute;nicos para su &oacute;ptimo funcionamiento.</p>
</li>
</ol>
<h3 style="text-align: center;">III. OBJETO</h3>
<ol style="text-align: justify;">
<li>
<p>Las partes de com&uacute;n acuerdo y por su convenir a sus intereses celebran el presente contrato de compraventa de veh&iacute;culo.</p>
</li>
<li>
<p>EL VENDEDOR da en venta y perpetua enajenaci&oacute;n a favor de EL COMPRADOR, el veh&iacute;culo descrito en la cl&aacute;usula II del presente contrato.</p>
</li>
<li>
<p>EL VENDEDOR se compromete a efectuar la entrega de toda la documentaci&oacute;n inherente al veh&iacute;culo para efectos del traspaso de dominio.</p>
</li>
</ol>
<h3 style="text-align: center;">IV. DECLARACI&Oacute;N</h3>
<ol style="text-align: justify;">
<li>
<p>EL COMPRADOR declara que ha revisado el veh&iacute;culo, recibi&eacute;ndolo en perfecto estado y condiciones, renunciando a reclamos por vicios redhibitorios.</p>
</li>
</ol>
<h3 style="text-align: center;">V. PRECIO</h3>
<ol style="text-align: justify;">
<li>
<p>El precio del objeto del presente contrato es de '.$montoEnLetras.' D&Oacute;LARES DE LOS ESTADOS UNIDOS DE AM&Eacute;RICA (USD $ '.$montoEnNumeros.') que EL COMPRADOR entrega AL VENDEDOR en '.$formaDePago.' y a su entera satisfacci&oacute;n.</p>
</li>
</ol>
<h3 style="text-align: center;">VI. RATIFICACI&Oacute;N</h3>
<ol style="text-align: justify;">
<li>
<p style="text-align: justify;">Las partes aceptan la vigencia y validez del presente instrumento por contener estipulaciones hechas en sus mutuos beneficios e intereses y en la buena fe de que se cumplir&aacute;n cada una con las obligaciones asumidas, para constancia de lo cual y fiel cumplimiento de lo estipulado, firman en dos ejemplares de igual tenor y valor.</p>
</li>
</ol>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table style="width: 567px; margin-left: auto; margin-right: auto;">
<tbody>
<tr style="height: 83px;">
<td style="height: 83px; width: 278.5px;">
<h3 style="padding-left: 60px; text-align: center;">'.$nombreVendedor.'</h3>
</td>
<td style="height: 83px; width: 278.5px;">
<h3 style="text-align: center;">'.$nombreComprador.'</h3>
</td>
</tr>
<tr style="height: 2px;">
<td style="height: 2px; width: 278.5px;">
<h3 style="text-align: center; padding-left: 60px;">CI: '.$numeroIdentificacionVendedor.'</h3>
</td>
<td style="height: 56.15625px; width: 278.5px;">
<h3 style="text-align: center; padding-left: 60px;">CI: '.$numeroIdentificacionComprador.'</h3>
</td>
</tr>
</tbody>
</table>';

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
