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


//Informacion persona juridica
$nombrePersonaJuridica =  $_POST['nombrePersonaJuridica'];
$RUC = $_POST['RUC'];
$representanteLegal =  $_POST['representanteLegal'];
$identificacionRepresentante = $_POST['identificacionRepresentante'];
$numeroIdentificacionRepresentante = $_POST['numeroIdentificacionRepresentante'];

//Infomracion persona natural
$nombrePersonaNatural =  $_POST['nombrePersonaNatural'];
$identificacionPersonaNatural =  $_POST['identificacionPersonaNatural'];
$numeroIdentificacionPersonaNatural =  $_POST['numeroIdentificacionPersonaNatural'];

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

$pdf->Write(0, 'CONTRATO DE SERVICIOS PROFESIONALES', '', 0, 'L', true, 0, false, false, 0);


// Instanciation of inherited class


// create some HTML content
$html = '<p><strong>CONTRATO DE SERVICIOS PROFESIONALES</strong></p>
<ol>
<li><strong>CL&Aacute;USULA PRIMERA: GENERALIDADES. &ndash;</strong></li>
</ol>
<p>Comparecen a la celebraci&oacute;n de este Contrato, libre y voluntariamente:</p>
<ul>
<li>Por una parte, '.$nombrePersonaJuridica.' con n&uacute;mero de RUC '.$RUC.', mediante su (Representante Legal) '.$representanteLegal.', con '.$identificacionRepresentante.' n&uacute;mero '.$numeroIdentificacionRepresentante.' (quien adelante y para efectos de este contrato se lo conocer&aacute; como Parte Contratante).</li>

<li>Por otra parte, <strong>'.$nombrePersonaNatural.'</strong> con '.$identificacionPersonaNatural.' n&uacute;mero (XXXXXXXX) (quien en adelante y para efectos de este contrato se lo conocer&aacute; como Parte Contratada).</li>
</ul>
<p>Los comparecientes son capaces para obligarse y contratar, intervienen en las calidades se&ntilde;aladas, libre y voluntariamente, convienen en celebrar el presente Contrato de Servicios Profesionales.</p>
<ol start="2">
<li><strong>CL&Aacute;USULA SEGUNDA: OBJETO. &ndash; </strong></li>
</ol>
<p>2.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El objeto de este contrato es que la Parte Contratada preste sus servicios profesionales consistentes en '.$nombreServicioProfesional.' para la Parte Contratante.</p>
<ol start="3">
<li><strong>CL&Aacute;USULA TERCERA: OBLIGACIONES DEL CONTRATADO. &ndash; </strong></li>
</ol>
<p><strong>&nbsp;</strong></p>
<ul>
<li>Cumplir el objeto contractual a plena satisfacci&oacute;n de la parte contratante.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Utilizar todos los medios a su alcance para satisfacer la necesidad de la parte contratante.</li>
<li>Reportar los avances del servicio profesional otorgado.</li>
<li>Dar correcci&oacute;n o soluci&oacute;n de cualquier posible inconveniente que tenga lugar en la implementaci&oacute;n del servicio prestado.</li>
</ul>
<ol start="4">
<li><strong>CL&Aacute;SULA CUARTA: OBLIGACIONES DEL CONTRATADO. - </strong></li>
</ol>
<p>4.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cancelar los honorarios profesionales del Contratado en la forma establecida en la Cl&aacute;usula Quinta de este contrato.</p>
<p>4.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Entregar toda la informaci&oacute;n solicitada por el Contratado.</p>
<ol start="5">
<li>C<strong>L&Aacute;USULA QUINTA: FORMA DE PAGO. - </strong></li>
</ol>
<p>5.1.<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Las partes acuerdan que el honorario por la realizaci&oacute;n de los servicios aqu&iacute; descritos se fija en '.$montoEnLetras.' de los Estados Unidos de Am&eacute;rica '.$montoEnNumeros.'.&nbsp; Que ser&aacute;n cancelados '.$numeroDiasPago.' días despu&eacute;s de presentada la factura.</p>
<ol start="6">
<li><strong>CL&Aacute;USULA SEXTA: PLAZO. - </strong></li>
</ol>
<p>6.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El plazo del contrato se estipula en '.$plazoContrato.' meses, pudiendo quedar autom&aacute;ticamente prorrogado si las partes t&aacute;citamente contin&uacute;an con su relaci&oacute;n contractual.</p>
<ol start="7">
<li><strong>CL&Aacute;SULA SEPTIMA: RELACI&Oacute;N CIVIL ENTRE LAS PARTES. &ndash;</strong></li>
</ol>
<p>7.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El presente Contrato es de naturaleza civil y mercantil, sujeto al derecho com&uacute;n y singularmente a las reglas del Contrato Civil y Mercantil.</p>
<p>7.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por tanto, entre el Contratante y el Contratado no existe relaci&oacute;n laboral o de dependencia alguna, ni, consecuentemente sometimiento al C&oacute;digo del Trabajo y Leyes del Seguro Social Obligatorio. No hay subordinaci&oacute;n jur&iacute;dica ni de ninguna otra especie que pudiera significar relaci&oacute;n laboral entre las partes o sus dependientes, puesto que la Parte Contratada prestar&aacute; sus servicios a la Parte Contratante de manera libre, independiente y aut&oacute;noma.</p>
<ol start="8">
<li><strong>CL&Aacute;USULA OCTAVA: TERMINACI&Oacute;N ANTICIPADA. &ndash; </strong></li>
</ol>
<p>8.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si cualquiera de las partes incurre en incumplimiento debidamente comprobado de sus obligaciones contractuales, y no hubiera remediado dicho incumplimiento despu&eacute;s de un t&eacute;rmino de diez (10) d&iacute;as desde que dicha remediaci&oacute;n fue requerida por escrito, la PARTE afectada, que s&iacute; hubiera cumplido con sus obligaciones, podr&aacute; dar por terminado el Contrato de manera unilateral e inmediata.</p>
<p>&nbsp;</p>
<p>8.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si el incumplimiento de cualquiera de las PARTES ocasionar&aacute; a la otra PARTE dificultades imprevistas para el cumplimiento de sus obligaciones, la PARTE afectada, que s&iacute; hubiera cumplido con sus obligaciones, podr&aacute; dar por terminado el Contrato de manera unilateral e inmediata.</p>
<ol start="9">
<li><strong>Cl&aacute;usula Novena: Ratificaci&oacute;n. &ndash; </strong></li>
</ol>
<p>9.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Las partes, completamente conscientes de los alcances y efectos legales de este contrato y de que en su celebraci&oacute;n no ha sido lesi&oacute;n, dolo, violencia, error ni ning&uacute;n otro vicio de la voluntad que pudiera afectar su existencia o validez, se ratifican en todas y cada una de las estipulaciones constantes en las cl&aacute;usulas precedentes, en la ciudad de '.$ciudad.' el '.$fecha.'.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td width="283">
<p>PARTE CONTRATANTE</p>
</td>
<td width="283">
<p>PARTE CONTRATADA</p>
</td>
</tr>
<tr>
<td width="283">
<p>'.$nombrePersonaJuridica.'</p>
</td>
<td width="283">
<p><strong>'.$nombrePersonaNatural.'</strong></p>
</td>
</tr>
<tr>
<td width="283">
<p>'.$representanteLegal.'</p>
</td>
<td width="283">
<p><strong>&nbsp;</strong></p>
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
