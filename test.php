<?php

	header("Content-Type: text/html; charset=utf-8");

include('db.php');

	// рабочий
	 require_once("dompdf/dompdf_config.inc.php");
	$files = glob("./pdf/include/*.php");
	foreach($files as $file) include_once($file);



	$s = '';


	foreach($_POST['concepto'] as $i=>$concepto) {
	$nds =0; 
		$kolvo =(int) $_POST['colvo'][$i];
		$ed_izm =(int)$_POST['ed_izm'][$i] ;
		$price = (int)$_POST['price'][$i];
	   $total_price =(int) $kolvo * $price * $ed_izm;
	   $operation =(int)$_POST['operation'][$i];
		$pct =(int) $operation / 100.00;
		$skidka = $kolvo * $ed_izm * $price / 100;
		$answer_nds = ($kolvo * $ed_izm - $skidka) * $pct;
		
		$proc1=  'IVA '.round($answer_nds, 2);
		$procent3 = $answer_nds ? $proc1 : '';
$summ1= $kolvo * $ed_izm - $skidka + $answer_nds;
$summ = $summ1 ? round($summ1, 2) : '';
	  $s .= '<tr><td>'.$concepto.'</td>
	  <td>'.$_POST['colvo'][$i].'</td>
	  <td>'.$_POST['ed_izm'][$i].'</td>
	  <td>'.$_POST['price'][$i].'</td>
	  <td>'.$_POST['operation'][$i].'</td>
	  <td>'.$summ.'<br> <span style="font-size:12px">'.$procent3.'</span></td></tr>';
	}
	$picture = $_FILES["picture"]["tmp_name"];
	if ($picture ==''){
		$picture ='<img style="width:200px; height:auto; margin: 0 auto;" src="1.png" />';
	}
	else {
	
	$type = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
	$data = file_get_contents($picture);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$picture = '<img style="width:200px; height:auto ;
		margin: 0 auto; "  src="'.$base64.'" />';
	}
	
	$html ='<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>';
	$html =' <style>
	
		* {
			// font-family:"Gotman", monospace;
			 font-family: "DejaVu Sans Mono", monospace;
		  }

	table.iksweb {
		width: 100%;
		border-collapse: collapse;
		border-spacing: 0;
		height: auto;
	}

	table.iksweb,
	table.iksweb td,
	table.iksweb th {
		border: 1px solid #595959;
	}

	table.iksweb td,
	table.iksweb th {
		padding: 3px;
		width: 30px;
		height: 35px;
	}

	table.iksweb th {
		background: #347c99;
		color: #fff;
		font-weight: normal;
	}

	// .box {
	// 	margin-top: 50px;
	// }

	.box div {
		width: 230px;
		height: auto;
		background-color: #e0e0e0;
		margin-right: 4px;

		display: inline-block;

	}
.tk{
	background-color: #e0e0e0;
}
	h2 {
		text-align: center;
		color: #595959;
	}

	.box div p {
		padding-left: 10px;

	}

	.hr1 {
		margin: 20px;


		color: #595959;

		margin-top: -14px;
	}


	/* таблица 2 */
	table {
		width: 100%;
		
		// border-collapse: collapse;
		// border-spacing: 0
	}

	table,
	td,
	th {
		// border: 1px solid #000;
	}

	td,
	th {
		// padding: 3px;
		width: 30px;
		height: 25px;
	}

	th {
		// background-color: #7accee !important;
	}
	.name1 p{
		margin: 10px;
		
	}
	.p_table{
		margin-left:0px 
	}
	.my_table_div{
		width:300px
	}
</style>
';
$html .="<h1>Factura</h1>";
 $html .='<div style="margin-top: 50px;">Número: '.$_POST["pay1"].' 
 Fecha: '.$_POST["calendar"].' </div>' ;

$html.='<hr style="color:green">



<div class="box">
	<div style="background-color: #fff;  ">

	'.$picture.'
	</div>
	<div class="name1">
		<p><b>Proveedor </b></p>
		<hr class="hr1">
		<p>
		'.    
		$_POST["fnombre"].'	
		</p><p>NIF: '.$_POST["fnif"].
		'</p><p>IVA: '.$_POST["fnif"].
		'</p><p> '.$_POST["fdirection"].
		'</p><p> '.$_POST["ftel"].
		'</p><p>'.$_POST["femail"].'</p>	
	</div>
	<div class="name1">
		<p><b>Cliente</b></p>
		<hr class="hr1">
		<p>
		'.    
		$_POST["cnombre"].'	
		</p><p>NIF:'.$_POST["cnif"].
		'</p><p>IVA:'.$_POST["civa"].
		'</p><p> '.$_POST["cdirection"].
		'</p><p> '.$_POST["ctel"].
		'</p><p> '.$_POST["cemail"].'</p>	
		
	</div>
</div>

<br><br>

<div>

<hr style="color:orange">
</div>




<table>
	<tr>
	<td ">Concepto	</td>

		<td>Precio unidad</td>
		<td>Cant.</td>
		<td>Dto.%</td>
		<td>IVA %</td>
		<td>Precio</td>
	</tr>
	<tr>
		<td colspan="6">
		<hr>
		</td>
	</tr>';

$html.=	$s;


$html.=	'</table>';

$html.=	'<table>
<tr>
        <td colspan="5">
		<hr>
		</td>
    </tr>
	<tr>
		<td style="color:#fff">111111111111111111	</td>

		<td style="color:#fff">1111</td>
		<td style="color:#fff">2222</td>
		<td class="tk"><b>Base Imponible </b> </td>
		<td class="tk"> <b>'.$_POST["totalSummabezNds"].'</b></td>
    </tr>
	<tr>
		<td ">	</td>

		<td></td>
		<td></td>
		<td class="tk"><b>IVA </b></td>
		<td class="tk"> <b>'.$_POST["totalFormat"].'</b></td>
    </tr>
	<tr>
		<td "></td>

		<td></td>
		<td></td>
		<td class="tk" style="color:steelblue"><b> Total </b></td>
		<td class="tk" style="color:steelblue"><b>'.$_POST["totalSumma"].'</b> </td>
    </tr>
	';


	$html.='<div><br><br>
	'.$_POST["notas"].'<br><br>

	Metodo de pago: Transferencia <br>
	
	Beneficiario: ' .$_POST["fnombre"].' <br>
	 IBAN: '.$_POST["fiban"].'<br>
	 SWIFT: '.$_POST["fswift"].'<br>
	</div>';

	
	$html .='<footer style=" position: absolute;
	
	bottom: 0;"> ' .$_POST["fnombre"].', NIF: ' .$_POST["fnif"].',  ' .$_POST["fdirection"].'</footer>';
	$html .='</body></html> ';
	$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

if($_POST["sendPhp"])	{

			$dompdf = new DOMPDF();
	
	$dompdf->load_html($html);
		// $dompdf -> set_option('enable_remote', true);
	$dompdf->render();
	$name1 = mysqli_real_escape_string($link, $_POST["fnombre"]);
	$calendar1 =mysqli_real_escape_string($link, $_POST["calendar"]);
	$email1 = mysqli_real_escape_string($link, $_POST["femail"]);
	$tel1 = mysqli_real_escape_string($link, $_POST["ftel"]);
	
	$name2 = mysqli_real_escape_string($link, $_POST["cnombre"]);

	$email2 = mysqli_real_escape_string($link, $_POST["cemail"]);
	$tel2 = mysqli_real_escape_string($link, $_POST["ctel"]);

	$sql= "INSERT INTO `customers` (`id`, `Nombre`, `E-mail`, `Telefono`, `Fecha`) VALUES (NULL, '$name1', '$tel1', '$email1', '$calendar1')";
	$sql1 = "INSERT INTO `clientes` (`id`, `Nombre`, `E-mail`, `Telefono`, `Fecha`) VALUES (NULL, '$name2', '$tel2', '$email2', '$calendar1')";

if(mysqli_query($link, $sql1)){
	echo "Данные успешно добавлены";
	} else{
	echo "Ошибка: " . mysqli_error($link);
}	
	if(mysqli_query($link, $sql)){
echo "Данные успешно добавлены";
} else{
echo "Ошибка: " . mysqli_error($link);
}

$dompdf->stream("new_file.pdf");
$pdf = $dompdf->output(); 
// file_put_contents(__DIR__ . '/pdf/schet.pdf', $pdf); 

	
	}


if($_POST["sendEmail"]) {
	$dompdf = new DOMPDF();
	
	$dompdf->load_html($html);
	$dompdf->render();
	$pdf = $dompdf->output(); 
	file_put_contents(__DIR__ . '/pdf/schet.pdf', $pdf); 
	$name        = "Название здесь идет";
$email       = $_POST['femail'];
$to          = "$name <$email>";
$from        = "Тест ";
$subject     = "Проверка отправки письма ";
$mainMessage = "Привет,я сообщение с pdf файлом";
$fileatt     = "pdf/schet.pdf"; // Расположение файла
$fileatttype = "application/pdf";
$fileattname = "newName.pdf"; //Имя, которое вы хотите использовать для отправки, или вы можете использовать то же имя
$headers     = "From: $from";

// Открываем и читаем файл в переменную.
$file = fopen($fileatt, 'rb');
$data = fread($file, filesize($fileatt));
fclose($file);

// Это прикрепляет файл
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers      .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";
$message = "Это multi-part сообщение в формате MIME․\n\n" .
"-{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$mainMessage  . "\n\n";

$data = chunk_split(base64_encode($data));
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatttype};\n" .
" name=\"{$fileattname}\"\n" .
"Content-Disposition: attachment;\n" .
" filename=\"{$fileattname}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"-{$mime_boundary}-\n";

// Отправить письмо
if(mail($to, $subject, $message, $headers))
{
echo "Письмо отправлено.";
} else {
echo "При отправке почты произошла ошибка.";
}
  }

if($_POST["sendEmail2"]) {
	$dompdf = new DOMPDF();
	
	$dompdf->load_html($html);
	$dompdf->render();
	$pdf = $dompdf->output(); 
	file_put_contents(__DIR__ . '/pdf/schet.pdf', $pdf); 
	$name        = "Название здесь идет";
$email       = $_POST['cemail'];
$to          = "$name <$email>";
$from        = "Тест ";
$subject     = "Проверка отправки письма ";
$mainMessage = "Привет,я сообщение с pdf файлом";
$fileatt     = "pdf/schet.pdf"; // Расположение файла
$fileatttype = "application/pdf";
$fileattname = "newName.pdf"; //Имя, которое вы хотите использовать для отправки, или вы можете использовать то же имя
$headers     = "From: $from";

// Открываем и читаем файл в переменную.
$file = fopen($fileatt, 'rb');
$data = fread($file, filesize($fileatt));
fclose($file);

// Это прикрепляет файл
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers      .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";
$message = "Это multi-part сообщение в формате MIME․\n\n" .
"-{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$mainMessage  . "\n\n";

$data = chunk_split(base64_encode($data));
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatttype};\n" .
" name=\"{$fileattname}\"\n" .
"Content-Disposition: attachment;\n" .
" filename=\"{$fileattname}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"-{$mime_boundary}-\n";

// Отправить письмо
if(mail($to, $subject, $message, $headers))
{
	echo "Письмо отправлено.";
} else {
	echo "При отправке почты произошла ошибка.";
}
}



?>