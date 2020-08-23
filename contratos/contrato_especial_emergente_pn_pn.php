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
$cargoADesempenar =  $_POST['cargoADesempenar'];

//Forma de pago
$tipoDeJornada = $_POST['tipoDeJornada'];
$sueldoEnLetras = $_POST['sueldoEnLetras'];
$sueldoEnNumeros = $_POST['sueldoEnNumeros'];
$numeroDeHoras = $_POST['numeroDeHoras'];
$numeroDeHorasDiarias = $_POST['numeroDeHorasDiarias'];
$numeroDeDias = $_POST['numeroDeDias'];


//Datos finales
$direccionTrabajo = $_POST['direccionTrabajo'];
$ciudadTrabajo = $_POST['ciudadTrabajo'];
$provinciaTrabajo = $_POST['provinciaTrabajo'];
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

<p style="text-align: center;"><strong>CONTRATO ESPECIAL EMERGENTE</strong></p>
<p style="text-align: center;"><strong>1.CL&Aacute;USULA PRIMERA: GENERALIDADES</strong></p>
<p>Comparecen a la celebraci&oacute;n de este Contrato, libre y voluntariamente:</p>
<p>1.1. Por otra parte,'.$nombrePersonaNatural1.' con '.$identificacionPersonaNatural1.' de identidad No. '.$numeroIdentificacionPersonaNatural1.', de estado civil '.$estadoCivil1.', nacionalidad '.$nacionalidad1.', con domicilio en la ciudad de '.$ciudadDomicilio1.' y con direcci&oacute;n en '.$direccion1.', quien en adelante y para efectos de este contrato se lo conocer&aacute; como EL EMPLEADOR.</p>
<p>1.2. Por otra parte,'.$nombrePersonaNatural2.' con '.$identificacionPersonaNatural2.' de identidad No. '.$numeroIdentificacionPersonaNatural2.', de estado civil '.$estadoCivil2.', nacionalidad '.$nacionalidad2.', con domicilio en la ciudad de '.$ciudadDomicilio2.' y con direcci&oacute;n en '.$direccion2.', quien en adelante y para efectos de este contrato se lo conocer&aacute; como EL TRABAJADOR.</p>
<p style="text-align: left;">Los comparecientes son capaces para obligarse y contratar e intervienen en las calidades se&ntilde;aladas. Adem&aacute;s, libre y voluntariamente, convienen en celebrar el presente Contrato Especial Emergente.<br /><br /><strong>2. CL&Aacute;USULA SEGUNDA: OBJETO</strong></p>
<p>2.1. El EMPLEADOR, con la finalidad de mantener la sostenibilidad de la producci&oacute;n y fuentes de ingresos en situaciones emergentes, o para nuevas inversiones o l&iacute;neas de negocio, productos o servicios, ampliaciones o extensiones del negocio, modificaci&oacute;n del giro del negocio, incremento en la oferta de bienes y servicios por parte de personas naturales o jur&iacute;dicas, nuevas o existentes o en el caso de necesidades de mayor demanda de producci&oacute;n o servicios en las actividades del EMPLEADOR, necesita contratar los servicios laborales, l&iacute;citos, personales y bajo dependencia del TRABAJADOR para el cargo de '.$cargoADesempenar.'.</p>
<p>2.2. Revisados los antecedentes del TRABAJADOR, &eacute;ste declara tener los conocimientos necesarios para el desempe&ntilde;o del cargo indicado.</p>
<p style="text-align: center;"><strong>3. CL&Aacute;USULA TERCERA: OBLIGACIONES DEL TRABAJADOR Y EL EMPLEADOR</strong></p>
<p>3.1. Con respecto a las obligaciones, derechos y prohibiciones del EMPLEADOR y El TRABAJADOR, estos estar&aacute;n sujetos a lo estrictamente dispuesto en el Cap&iacute;tulo IV, De las obligaciones del EMPLEADOR y del TRABAJADOR, del C&oacute;digo del Trabajo, y a las dem&aacute;s obligaciones dispuestas en el presente Contrato Especial Emergente.</p>
<p>3.2. A parte de lo enunciado en el ac&aacute;pite anterior, El TRABAJADOR estar&aacute; obligado a lo siguiente:</p>
<ol>
<li>Ejecutar las funciones para las cuales fue contratada, bajo los lineamientos t&eacute;cnicos y dem&aacute;s condiciones, determinadas por El EMPLEADOR, oblig&aacute;ndose a cumplir las disposiciones verbales o escritas que le determine.</li>
<li>Ejecutar su labor con total profesionalismo, incorporando al servicio de El EMPLEADOR todos sus conocimientos y diligencia como '.$cargoADesempenar.'.</li>
<li>Durante la vigencia del presente contrato, El TRABAJADOR se obliga a laborar exclusivamente para El EMPLEADOR, sin que pueda realizar otras funciones ni por cuenta propia, ni por cuenta de terceros.</li>
<li>El TRABAJADOR ser&aacute; responsable de todo da&ntilde;o o p&eacute;rdida que ocasione, incluyendo el proveniente del no uso de las medidas de seguridad que El EMPLEADOR imponga para el cuidado y protecci&oacute;n de El TRABAJADOR, como de los dem&aacute;s TRABAJADORes.</li>
<li>El TRABAJADOR tiene la obligaci&oacute;n de entregar todo equipo, documento, informaci&oacute;n, respaldos, materiales, herramientas, y dem&aacute;s, que sean de propiedad del EMPLEADOR, una vez terminado el contrato de trabajo bajo cualquiera de las formas establecidas en el C&oacute;digo del Trabajo.</li>
</ol>
<p style="text-align: center;"><strong>4. CLA&Uacute;SULA CUARTA: JORNADA ORDINARIA Y HORAS EXTRAORDINARIAS</strong></p>
<p>4.1. El TRABAJADOR se obliga y acepta, por su parte, a laborar la jornada '.$tipoDeJornada.', es decir, '.$numeroDeHoras.', horas distribuidas en '.$numeroDeHorasDiarias.' horas, por '.$numeroDeDias.' d&iacute;as a la semana. Adem&aacute;s, El TRABAJADOR contar&aacute; con una hora de almuerzo.</p>
<p>4.2. Asimismo, por acuerdos entre las partes, El TRABAJADOR podr&aacute; laborar horas extraordinarias y suplementarias cuando las circunstancias lo ameriten, y tan solo por orden escrita del EMPLEADOR, aplicando lo dispuesto en el art&iacute;culo 19 de la Ley Org&aacute;nica de Apoyo Humanitario y el art&iacute;culo 55 del C&oacute;digo del Trabajo.</p>
<p>4.3. De igual manera, el EMPLEADOR y el TRABAJADOR se&ntilde;alan y reconocen que el cargo ocupado por el TRABAJADOR es un cargo que requiere, cuando las circunstancias lo ameriten, y tan solo por orden expresa del EMPLEADOR, disponibilidad de tiempo para laborar d&iacute;as festivos, con la respectiva retribuci&oacute;n acorde a lo dispuesto en el C&oacute;digo del Trabajo.</p>
<p style="text-align: center;"><strong> 5. CL&Aacute;USULA QUINTA: REMUNERACI&Oacute;N</strong></p>
<p>5.1. Las partes acuerdan que el honorario por la prestaci&oacute;n de sus servicios, bajo relaci&oacute;n de dependencia aqu&iacute; descritos, se fija en '.$sueldoEnLetras.' de los Estados Unidos de Am&eacute;rica ($'.$sueldoEnNumeros.').</p>
<p>5.2. De forma adicional, El EMPLEADOR reconocer&aacute; a El TRABAJADOR las obligaciones sociales y los dem&aacute;s beneficios establecidos en la legislaci&oacute;n ecuatoriana.</p>
<p>5.3. Las remuneraciones adicionales y beneficios establecidas por el C&oacute;digo de Trabajo ser&aacute;n proporcionales, de acuerdo con la jornada pactada en el presente Contrato y a lo dispuestas en la normativa laboral.</p>
<p style="text-align: center;"><strong>6. CL&Aacute;USULA SEXTA: PLAZO</strong></p>
<p>6.1. El presente Contrato Especial Emergente tendr&aacute; un plazo de un a&ntilde;o, con posibilidad de ser renovado, previo acuerdo escrito entre las partes, por el mismo plazo anteriormente especificado.</p>
<p style="text-align: center;"><strong>7. CLA&Uacute;SULA S&Eacute;PTIMA: TERMINACI&Oacute;N DE LA RELACI&Oacute;N LABORAL</strong><strong>.</strong></p>
<p>7.1. El presente Contrato de Trabajo podr&aacute; terminar, previo visto bueno, por las causales dispuestas en los art&iacute;culos 172, 173 y 180 del C&oacute;digo del Trabajo y las dem&aacute;s causales establecidas en el presente contrato.</p>
<p style="text-align: center;"><strong>8. CL&Aacute;USULA OCTAVA: LUGAR DE TRABAJO</strong></p>
<p>8.1. El TRABAJADOR desempe&ntilde;ar&aacute; las funciones para las cuales ha sido contratado en '.$direccionTrabajo.' la ciudad de '.$ciudadTrabajo.', provincia de '.$provinciaTrabajo.' para el cumplimiento cabal de las funciones encomendadas.</p>
<p>8.2. No obstante, El TRABAJADOR, por petici&oacute;n del EMPLEADOR, podr&aacute; movilizarse dentro y fuera del cant&oacute;n y provincia anteriormente se&ntilde;alados, sin que esto acarree o pueda considerarse como cambio de funciones o de lugar de trabajo.</p>
<p style="text-align: center;"><strong>9. CL&Aacute;USULA NOVENA: CONFIDENCIALIDAD Y PROPIEDAD INTELECTUAL</strong></p>
<p>9.1. En vista de que El TRABAJADOR tendr&aacute; acceso a informaci&oacute;n Confidencial de propiedad exclusiva del EMPLEADOR, El TRABAJADOR, se compromete a guardar absoluta reserva y confidencialidad respecto a toda la informaci&oacute;n a la que tenga acceso. Por tanto, todos los documentos, cartas, base de datos, informaci&oacute;n sobre clientes, proyectos comerciales, estrategias de negocios, sistemas inform&aacute;ticos, c&oacute;digos, contrase&ntilde;as, contratos y dem&aacute;s instrumentos privados relacionados a su trabajo, e informaci&oacute;n a la que tenga acceso, ser&aacute; objeto de escrupulosa reserva y permanecer&aacute; dentro de las oficinas de El EMPLEADOR.</p>
<p>9.2. Adem&aacute;s, se compromete a no cometer ning&uacute;n acto u acci&oacute;n que represente deslealtad hacia El EMPLEADOR, o que de manera directa o indirecta pudiera afectar El EMPLEADOR.</p>
<p>9.3. Los descubrimientos e invenciones, las mejoras en los procedimientos, as&iacute; como los trabajos y resultados de las actividades que desarrolle El TRABAJADOR, mientras preste sus servicios, ser&aacute;n de propiedad exclusiva del EMPLEADOR.</p>
<p>9.4. La violaci&oacute;n de esta prohibici&oacute;n conlleva a la terminaci&oacute;n del Contrato Especial Emergente, previa petici&oacute;n de visto bueno y sin perjuicio de las acciones que pueda implementar El EMPLEADOR.</p>
<p style="text-align: center;"><strong>10. CL&Aacute;USULA D&Eacute;CIMA: LEGISLACI&Oacute;N APLICABLE</strong></p>
<p>10.1. En todo lo no previsto en este Contrato, cuyas modalidades especiales las reconocen y aceptan las partes, &eacute;stas se sujetan a lo dispuesto en la Ley Org&aacute;nica de Apoyo Humanitario y C&oacute;digo del Trabajo.</p>
<p style="text-align: center;"><strong> 11. CL&Aacute;USULA D&Eacute;CIMA PRIMERA: JURISDICCI&Oacute;N Y COMPETENCIA</strong></p>
<p>11.1 Para el evento de controversia entre las partes; resultantes dentro de la ejecuci&oacute;n del presente contrato, en el caso de que las mismas no pudiesen ser arregladas pronta y amistosamente por las partes, las mismas someter&aacute;n las controversias a un proceso de Mediaci&oacute;n en un Centro Reconocido por el Consejo de la Judicatura, y en caso de no llegar a un acuerdo, se resolver&aacute;n ante los jueces competentes del trabajo del cant&oacute;n en donde est&eacute; domiciliado el empleador; y, al procedimiento sumario, previsto en el C&oacute;digo del Trabajo vigente, atendiendo a las normas vigentes.</p>
<p style="text-align: center;"><strong>12. CL&Aacute;USULA D&Eacute;CIMA SEGUNDA: RATIFICACI&Oacute;N</strong></p>
<p>12.1. Las partes, completamente conscientes de los alcances y efectos legales de este Contrato de Trabajo y de que en su celebraci&oacute;n no ha existido lesi&oacute;n, dolo, violencia, error ni ning&uacute;n otro vicio de la voluntad que pudiera afectar su existencia o validez, se ratifican en todas y cada una de las estipulaciones constantes en las cl&aacute;usulas precedentes, en la ciudad de '.$ciudad.' el '.$fecha.'.</p>
<table>
<tbody>
<tr>
<td>
<p>PARTE CONTRATANTE</p>
</td>
<td>
<p>PARTE CONTRATADA</p>
</td>
</tr>
<tr>
<td>
<p>'.$nombrePersonaNatural1.'</p>
</td>
<td>
<p>'.$nombrePersonaNatural2.'</p>
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