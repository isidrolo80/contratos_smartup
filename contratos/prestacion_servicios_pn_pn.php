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


//Infomracion persona natural
$nombrePersonaNatural1 =  $_POST['nombrePersonaNatural1'];
$identificacionPersonaNatural1 =  $_POST['identificacionPersonaNatural1'];
$numeroIdentificacionPersonaNatural1 =  $_POST['numeroIdentificacionPersonaNatural1'];
$estadoCivil1 =  $_POST['estadoCivil1'];
$nacionalidad1 =  $_POST['nacionalidad1'];
$ciudadDomicilio1 =  $_POST['ciudadDomicilio1'];
$direccion1 =  $_POST['direccion1'];

//Infomracion persona natural
$nombrePersonaNatural2 =  $_POST['nombrePersonaNatural2'];
$identificacionPersonaNatural2 =  $_POST['identificacionPersonaNatural2'];
$numeroIdentificacionPersonaNatural2 =  $_POST['numeroIdentificacionPersonaNatural2'];
$estadoCivil2 =  $_POST['estadoCivil2'];
$nacionalidad2 =  $_POST['nacionalidad2'];
$ciudadDomicilio2 =  $_POST['ciudadDomicilio2'];
$direccion2 =  $_POST['direccion2'];


//Objeto
$nombreServicioProfesional =  $_POST['nombreServicioProfesional'];

//Forma de pago
$montoEnLetras =  $_POST['montoEnLetras'];
$montoEnNumeros =  $_POST['montoEnNumeros'];
$numeroDiasPago =  $_POST['numeroDiasPago'];
$plazoContrato =  $_POST['plazoContrato'];


//Datos finales
$ciudad =  $_POST['ciudad'];
$fecha =  $_POST['fecha'];


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



// Instanciation of inherited class


// create some HTML content
$html = '

<p style="text-align: center;"><strong>CONTRATO DE SERVICIOS PROFESIONALES</strong></p>
<p style="text-align: center;"><strong>I. <u>CL&Aacute;USULA PRIMERA: GENERALIDADES</u></strong></p>
<p style="text-align: justify;">Comparecen a la celebraci&oacute;n de este Contrato, libre y voluntariamente:</p>
<p style="text-align: justify;"><strong>1.1.</strong> Por una parte, '.$nombrePersonaNatural1.', con '.$identificacionPersonaNatural1.' de identidad '.$numeroIdentificacionPersonaNatural1.', de estado civil '.$estadoCivil1.', nacionalidad '.$nacionalidad1.', con domicilio en la ciudad de '.$ciudadDomicilio1.' y con direcci&oacute;n en '.$direccion1.', quien en adelante y para efectos de este contrato se lo conocer&aacute; como PARTE CONTRANTE.</p>
<p style="text-align: justify;"><strong>1.2.</strong> Por otra parte, '.$nombrePersonaNatural2.', con '.$identificacionPersonaNatural2.' de identidad '.$numeroIdentificacionPersonaNatural2.', de estado civil '.$estadoCivil2.', nacionalidad '.$nacionalidad2.', con domicilio en la ciudad de '.$ciudadDomicilio2.' y con direcci&oacute;n en '.$direccion2.', quien en adelante y para efectos de este contrato se lo conocer&aacute; como PARTE CONTRATADA.</p>
<p style="text-align: justify;">Los comparecientes son capaces para obligarse y contratar, intervienen en las calidades se&ntilde;aladas, por lo que convienen en celebrar el presente Contrato de Servicios Profesionales.</p>
<p style="text-align: center;"><strong>II. <u>CL&Aacute;USULA SEGUNDA: OBJETO</u></strong></p>
<p><strong>2.1.</strong>&nbsp;El objeto de este contrato es que la PARTE CONTRATADA preste sus servicios profesionales consistentes en '.$nombreServicioProfesional.' para la Parte Contratante.</p>
<p style="text-align: center;"><strong>III. <u>CL&Aacute;USULA TERCERA: OBLIGACIONES DE LA PARTE CONTRATADA</u></strong></p>
<p><strong>3.1.</strong> Cumplir el objeto contractual a plena satisfacci&oacute;n de la PARTE CONTRATANTE.</p>
<p><strong>3.2.</strong> Utilizar todos los medios a su alcance para satisfacer los objetivos de la parte contratante.</p>
<p><strong>3.3.</strong> Reportar los avances del servicio profesional otorgado.</p>
<p><strong>3.4.</strong> Dar correcci&oacute;n o soluci&oacute;n de cualquier posible inconveniente que tenga lugar en la implementaci&oacute;n del servicio prestado.</p>
<p style="text-align: center;"><strong>IV. <u>CL&Aacute;SULA CUARTA: OBLIGACIONES DE LA PARTE CONTRATANTE</u></strong></p>
<p><strong>4.1.</strong>&nbsp;Cancelar los honorarios profesionales de la PARTE CONTRATADA en la forma establecida en la Cl&aacute;usula Quinta de este contrato.</p>
<p><strong>4.2.</strong>&nbsp;Entregar toda la informaci&oacute;n solicitada por la PARTE CONTRATADA.</p>
<p style="text-align: center;"><strong>V. <u>CL&Aacute;USULA QUINTA: FORMA DE PAGO</u></strong></p>
<p><strong>5.1.</strong> Las partes acuerdan que el honorario por la realizaci&oacute;n de los servicios aqu&iacute; descritos se fija en '.$montoEnLetras.' DÓLARES DE LOS ESTADOS UNIDOS DE AM&Eacute;RICA ($'.$montoEnNumeros.'), los mismos que ser&aacute;n cancelados '.$numeroDiasPago.' d&iacute;as despu&eacute;s de presentada la factura.</p>
<p style="text-align: center;"><strong>VI. <u>CL&Aacute;USULA SEXTA: PLAZO</u></strong></p>
<p><strong>6.1.</strong> El plazo del contrato se estipula en '.$plazoContrato.' meses. El contrato podr&iacute;a quedar autom&aacute;ticamente prorrogado si las partes t&aacute;citamente contin&uacute;an con su relaci&oacute;n contractual.</p>
<p style="text-align: center;"><strong>VII. <u>CL&Aacute;SULA SEPTIMA: RELACI&Oacute;N CIVIL ENTRE LAS PARTES</u></strong></p>
<p style="text-align: justify;"><strong>7.1.</strong> El presente Contrato es de naturaleza civil y mercantil, sujeto al derecho com&uacute;n y singularmente a las reglas del Contrato Civil y Mercantil.</p>
<p style="text-align: justify;"><strong>7.2.</strong> Por tanto, entre la PARTE CONTRATANTE y la PARTE CONTRATADA no existe relaci&oacute;n laboral o de dependencia alguna, ni consecuentemente sometimiento al C&oacute;digo del Trabajo y Leyes del Seguro Social Obligatorio. De igual forma, subordinaci&oacute;n jur&iacute;dica, ni de ninguna otra especie que pudiera significar relaci&oacute;n laboral entre las partes o sus dependientes, puesto que la Parte Contratada prestar&aacute; sus servicios a la Parte Contratante de manera libre, independiente y aut&oacute;noma.</p>
<p style="text-align: center;"><strong>VIII. <u>CL&Aacute;USULA OCTAVA: TERMINACI&Oacute;N ANTICIPADA</u></strong></p>
<p><strong>8.1.</strong> Si el incumplimiento de cualquiera de las PARTES ocasionar&aacute; a la otra PARTE dificultades imprevistas para el cumplimiento de sus obligaciones, la PARTE afectada, que s&iacute; hubiera cumplido con sus obligaciones, podr&aacute; dar por terminado el Contrato de manera unilateral e inmediata.</p>
<p style="text-align: center;"><strong>IX. <u>CLA&Uacute;SULA NOVENA: RATIFICACI&Oacute;N</u></strong></p>
<p><strong>9.1.</strong> Las partes, completamente conscientes de los alcances y efectos legales de este contrato y que en su celebraci&oacute;n no ha existido lesi&oacute;n, dolo, violencia, error ni ning&uacute;n otro vicio de la voluntad que pudiera afectar su existencia o validez, se ratifican en todas y cada una de las estipulaciones constantes en las cl&aacute;usulas precedentes, en la ciudad de '.$ciudad.', el '.$fecha.'.</p>
<p>&nbsp;</p>
<table style="margin-left: auto; margin-right: auto;">
<tbody>
<br><br>
<tr>
<td style="text-align: center;" width="261">
<p>PARTE CONTRATANTE</p>
<p><span style="background-color: #ffff00;">'.$nombrePersonaNatural1.'</span></p>
</td>
<td style="text-align: center;" width="257">
<p>PARTE CONTRATADA</p>
<p><span style="background-color: #ffff00;">'.$nombrePersonaNatural2.'</span></p>
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
