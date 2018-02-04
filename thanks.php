<?php
if (count($_POST) > 0){
   define('FROM', 'info@'.$_SERVER['HTTP_HOST']);
	define('TO1', 'micevol-com@yandex.ru'); 
	define('TO2', 'bel-kar@mail.ru'); 
   define('SUBJECT', 'Заявка с шкафы-купе-кухни');
   
   $keyValues = array('inputFIO'=>'Имя', 'inputTel'=>'Телефон', 'message'=>'Собщение', 'inputEmail'=>'Данные');
   
   $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <title>'.SUBJECT.'</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
<body style="margin:0; padding: 0;">
   <table align="center" cellpadding="0" cellspacing="0" width="500" style="border-collapse: collapse; margin: 0 auto; font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif; border: 1px solid #333;">
   <tr>
	   <th style="border: 1px solid #333; background-color: #333; text-align: center; padding: 10px;" colspan="2"><h1 style="color: #fff; font-size: 18px; margin: 0; padding: 0;">'.SUBJECT.'</h1></th>
   </tr>';
   
   foreach($_POST as $key => $value){
      $message .= '<tr>';
      if(array_key_exists($key, $keyValues))
      {
         $message .= '<td width="200" style="border: 1px solid #333; font-size: 14px; line-height: 18px; padding: 5px;">'.$keyValues[$key].'</td>';
      }
      else{
         $message .= '<td width="200" style="border: 1px solid #333; font-size: 14px; line-height: 18px; padding: 5px;">'.$key.'</td>';
      }
      $message .= '<td style="border: 1px solid #333; font-size: 14px; line-height: 18px; padding: 5px;">'.$value.'</td>
      </tr>';
   }
   $message .= '</table></body></html>'; 
   $header = "MIME-Version: 1.0\r\n";
   $header.= "Content-type: text/html; charset=UTF-8\r\n";
   $header.= sprintf("From: %s <%s>\r\n", FROM, FROM);
   mail (TO1, SUBJECT, $message, $header);
   mail (TO2, SUBJECT, $message, $header);
}
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Спасибо за заявку!</title>
	<style type="text/css">

		body {
			margin: 0px;
			padding: 0px;
			background: #fff;
		}

		.title{
			margin: 200px auto 0 auto;
			width: 1000px;
			height: auto;
		}

		.title h1{
			margin: 0;
			padding: 0;
			text-align: center;
			font-size: 60px;
			font-family: "MyriadProBold";
			color: #000;
			font-weight: 700;
		}

		.title p{
			margin: 0;
			padding: 0;
			text-align: center;
			font-size: 20px;
			color: #000;
			font-family: "MyriadProRegular";
		}

		.bt{
			margin: 40px auto;
			width: 260px;
			height: 50px;
			font-size: 22px;
			line-height: 47px;
			text-align: center;
			font-weight: 300;
			border: 3px solid #000;
			-webkit-transition: 0.6s;
			-o-transition: 0.6s;
			transition: 0.6s;
		}

			.bt:hover{
				background: rgba(255,255,255,0.1);
			}

			.bt a{
				display: block;
				height: 100%;
				color: #000;
				font-family: "MyriadProRegular";
				text-decoration: none;
			}
	</style>

</head>
<body>
<div id="wrapper">

	<div class="title">
		<h1>Спасибо за заявку!</h1>
		<p>Мы свяжемся с Вами в ближайшее время</p>
	</div>

	<div class="bt">
		<a href="/">Вернуться на сайт</a>
	</div>

</div>



</body></html>
