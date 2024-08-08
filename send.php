<?php
	error_reporting(E_ALL);
	$sendto   = "agro-turbo-mel@yandex.ru";
	if($_POST['form_number']=='1'){$subject  = "Заявка с агро турбо - верхний блок"; }
	if($_POST['form_number']=='2'){$subject  = "Заказ с агро турбо на покупку"; }
	if($_POST['form_number']=='3'){$subject  = "На агро турбо хотят оставить отзыв"; }
	if($_POST['form_number']=='4'){$subject  = "Вопрос от клиента с агро турбо"; }
	if($_POST['form_number']=='5'){$subject  = "Заявка с агро турбо - блок хотите узнать более подробно?"; }
	if($_POST['form_number']=='6'){$subject  = "Заявка с агро турбо - блок получите прайс лист"; }
	$headers = 'From: agroturbo <no-reply@agroturb.com.ua>' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
	if($_POST['lid_name']) {$lid_name = $_POST['lid_name']; }
	if($_POST['lid_mail']) {$lid_mail = $_POST['lid_mail'];	}
	if($_POST['lid_phone']) {$lid_phone = $_POST['lid_phone'];	}
	if($_POST['otziv_text']) {$otziv_text = $_POST['otziv_text'];	}
	if($_POST['vopros_text']) {$vopros_text = $_POST['vopros_text'];	}
	if($_POST['nazv']) {$nazv = $_POST['nazv'];	}
	if($_POST['cena']) {$cena = $_POST['cena'];	}
	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg  .= "К вам поступила заявка<br>";
	if($_POST['lid_name']) {$msg.=" Имя - ".$lid_name."<br>"; }
	if($_POST['lid_mail']) {$msg.=" e-mail - ".$lid_mail."<br>"; }
	if($_POST['lid_phone']) {$msg.=" Телефон - ".$lid_phone."<br>"; }
	if($_POST['otziv_text']) {$msg.=" Отзыв - ".$otziv_text."<br>"; }
	if($_POST['vopros_text']) {$msg.=" Вопрос - ".$vopros_text."<br>"; }
	if($_POST['nazv']) {$msg.=" Название - ".$nazv."<br>"; }
	if($_POST['cena']) {$msg.=" Цена - ".$cena."<br>"; }
	$msg .= "</body></html>";
	if(mail($sendto, $subject, $msg, $headers)) {
   	 	echo "<center>Заявка отправлена!</center>";
	} else {
    	echo "<center>Заявка не отправлена!</center>";
	}
?>