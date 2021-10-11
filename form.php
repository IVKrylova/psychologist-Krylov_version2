<?php
	include 'check-recaptcha.php';

		if($arr['success']){
			if(isset($_POST['submit'])) {
				if (empty($_POST['name'])) {
					echo "Введите Ваше имя";
		    	} elseif (empty($_POST['phone'])){
					echo "Введите Ваш телефон";
				} elseif (empty($_POST['message'])){
					echo "Введите сообщение";
				} elseif (empty($_POST['checkboxPrivacy'])){
					echo "<script type='text/javascript'>alert('Сообщение не отправлено! Необходимо принять условия политики конфиденциальности');</script>";
				} else {
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$message = $_POST['message'];
					$address = "basni_krylova@bk.ru";
					$mes = "Имя: $name\nТелефон: $phone\nСообщение: $message";
					mail($address, "Сообщение с сайта!", $mes, "Content-Type: text/html; charset=UTF-8");
					exit(header('location:index.php'));
				}
			}
		} 
	}
?>