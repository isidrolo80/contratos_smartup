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
$numeroRUCVendedor =  $_POST['numeroRUCVendedor']; 
$domicilioVendedor =  $_POST['domicilioVendedor'];
$RepresentanteLegalVendedor =  $_POST['RepresentanteLegalVendedor'];
$identificacionRepresentante1 = $_POST['identificacionRepresentante1'];
$CedulaRepresentante1 = $_POST['CedulaRepresentante1'];

$nombreComprador =  $_POST['nombreComprador'];
$numeroRUCComprador =  $_POST['numeroRUCComprador'];
$domicilioComprador =  $_POST['domicilioComprador'];
$RepresentanteLegalComprador =  $_POST['RepresentanteLegalComprador'];
$identificacionRepresentante2 = $_POST['identificacionRepresentante2'];
$CedulaRepresentante2 = $_POST['CedulaRepresentante2'];




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

<p style="text-align: center;"><strong>CONTRATO DE COMPRAVENTA DE VEH&Iacute;CULO</strong></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: justify;">En la ciudad de '.$nombreCiudad.', a los '.$diaDelMes.' d&iacute;as del mes de '.$mesDelAno.' de '.$anoContrato.', las partes de forma libre y voluntaria suscriben el presente contrato:</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: center;"><strong>I.&nbsp;<u>COMPARECIENTES</u></strong></p>
<p style="text-align: justify;"><strong>1.1.</strong> Por una parte, '.$nombreVendedor.' con RUC No. '.$numeroRUCVendedor.', domiciliada en '.$domicilioVendedor.', mediante su representante legal '.$RepresentanteLegalVendedor.', con '.$identificacionRepresentante1.' de identidad No. '.$CedulaRepresentante1.' , por sus propios y personales derechos a quien para efectos del presente contrato se le denominar&aacute; &ldquo;VENDEDOR&rdquo;; y,</p>
<p style="text-align: justify;"><strong>1.2.</strong> Por otra parte, '.$nombreComprador.' con RUC No. '.$numeroRUCComprador.', domiciliada en '.$domicilioComprador.', mediante su representante legal '.$RepresentanteLegalComprador.', con '.$identificacionRepresentante2.' de identidad No. '.$CedulaRepresentante2.' , por sus propios y personales derechos, a quien para los efectos del presente contrato se le denominar&aacute; &ldquo;COMPRADOR&rdquo;.</p>
<p style="text-align: center;"><strong>II. <u>ANTECEDENTES</u></strong></p>
<p><strong>2.1.</strong> El VENDEDOR, es propietario del veh&iacute;culo de las siguientes caracter&iacute;sticas:</p>
<ol>
<li><b>Marca:</b> '.$marca.'</li>
<li><b>Modelo:</b> '.$modelo.'</li>
<li><b>A&ntilde;o:</b> '.$anoVehiculo.'</li>
<li><b>Motor N&ordm;:</b> '.$motor.'</li>
<li><b>Chasis:</b> '.$chasis.'</li>
<li><b>Placas:</b> '.$placas.'</li>
<li><b>Color:</b> '.$color.'</li>
</ol>
<p style="text-align: justify;"><strong>2.2.&nbsp;</strong>El VENDEDOR declara que sobre el veh&iacute;culo de su propiedad no pesa gravamen alguno ni prohibici&oacute;n de enajenar.</p>
<p style="text-align: justify;"><strong>2.3.&nbsp;</strong>El VENDEDOR declara que el veh&iacute;culo se encuentra en perfecto estado y que peri&oacute;dicamente ha sido sujeto de mantenimientos y chequeos mec&aacute;nicos para su &oacute;ptimo funcionamiento.</p>
<p style="text-align: center;"><strong>III.&nbsp;<u>OBJETO</u></strong></p>
<p style="text-align: justify;"><strong>3.1.</strong> Las partes de com&uacute;n acuerdo y por convenir a sus intereses celebran el presente contrato de compraventa de veh&iacute;culo.</p>
<p style="text-align: justify;"><strong>3.2.</strong> El VENDEDOR da en venta y perpetua enajenaci&oacute;n a favor del COMPRADOR, el veh&iacute;culo descrito en el punto 2.1 del presente contrato. Adem&aacute;s, el VENDEDOR se compromete a efectuar la entrega de toda la documentaci&oacute;n inherente al veh&iacute;culo para efectos del traspaso de dominio.</p>
<p style="text-align: justify;"><strong>3.3.</strong> Por su parte, el COMPRADOR se obliga a pagar la totalidad del precio pactado.</p>
<p style="text-align: center;"><strong>IV.&nbsp;<u>DECLARACI&Oacute;N</u></strong></p>
<p><strong>4.1.</strong> El COMPRADOR declara que ha revisado el veh&iacute;culo y que este se encuentra en perfectas condiciones, renunciando a reclamos por vicios redhibitorios.</p>
<p style="text-align: center;"><strong>V.&nbsp;<u>PRECIO</u></strong></p>
<p style="text-align: justify;"><strong>5.1.</strong> El precio del vehículo, objeto del presente contrato es de '.$montoEnLetras.' D&Oacute;LARES DE LOS ESTADOS UNIDOS DE AM&Eacute;RICA '.$montoEnNumeros.' que el COMPRADOR entrega al VENDEDOR en '.$formaDePago.' y a su entera satisfacci&oacute;n.</p>
<p style="text-align: center;"><strong>VI.&nbsp;<u>RATIFICACI&Oacute;N</u></strong></p>
<p style="text-align: justify;"><strong>6.1.</strong> Las partes aceptan la vigencia y validez del presente instrumento por contener estipulaciones hechas en sus mutuos beneficios e intereses y en la buena fe de que se cumplir&aacute;n cada una con las obligaciones asumidas, para constancia de lo cual y fiel cumplimiento de lo estipulado, firman en dos ejemplares de igual tenor y valor.</p>
<p style="text-align: justify;">&nbsp;</p>
<table style="margin-left: auto; margin-right: auto;" width="552">
<tbody>
<tr>
<td style="text-align: center;" width="278">
<p>&nbsp;</p>
<p><span style="background-color: #ffff00;">'.$RepresentanteLegalVendedor.'<br> Representante Legal de <br>'.$nombreVendedor.' <br>RUC No. '.$numeroRUCVendedor.' </span></p>
</td>
<td style="text-align: center;" width="274">
<p>&nbsp;</p>
<p><span style="background-color: #ffff00;">'.$RepresentanteLegalComprador.'<br> Representante Legal de <br>'.$nombreComprador.'<br> RUC No. '.$numeroRUCComprador.'</span></p>
</td>
</tr>
</tbody>
</table>

';

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
