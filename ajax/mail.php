<?php

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$troubles = $_POST["formData"];
   $place = array(
   1 => 'Адрес1',
   2 => 'Адрес2',
   3 => 'Адрес3',
   4 => 'Адрес4');


	for($i=0; $i<strlen($troubles); $i++){
		if($troubles[$i]<'0'||$troubles[$i]>'9')
		{
			$troubles[$i] = " ";
		}
		
	}
   $troubles = str_replace(" ", "", $troubles);

   $troubles = str_split ( $troubles, 1 );

   $text .= "%0A<b>Адрес:</b>".$place[2]."%0A";

 
   $text .= "%0A<b>Имя клиента:</b> ".$name."%0A";
   $text .= "%0A<b>Телефон клиента:</b> ".$phone."%0A";
   $text .= "%0A<b>Замечания:</b>%0A";

   foreach($troubles as $t){
   	switch($t){
   		case '1': 
   			$text .= "-Слабое давление воды%0A";
   			break;
   		case '2': 
   			$text .= "-Плохо пенится пена%0A";
   			break;
   		case '3': 
   			$text .= "-Слабая пена%0A";
   			break;
   		case '4': 
   			$text .= "-В боксе грязно%0A";
   			break;
   		case '5': 
   			$text .= "-Не работает карта лояльности%0A";
   			break;
   		case '6': 
   			$text .= "-Не могу рассчитаться банковской картой/телефоном%0A";
   			break;
   		case '7': 
   			$text .= "-Неприветливый администратор%0A";
   			break;
   		case '8': 
   			$text .= "-У администратора нет разменных денег%0A";
   			break;
   		case '9': 
   			$text .= "-Другое%0A";
   			break;

   	}
   }

	$subject = "=?utf-8?B?".base64_encode("Отзыв о сервисе")."?=";
	$headers = "From: $name\r\n Content-type: text/html; charset = utf-8\r\n";

   $token   = "1693527948:AAFgvtyj3HsWCT3fJVHPxPjDwiyeV_H7xSo";
         $chat_id = "-544558929"; //@username_to_id_bot


         $text .= "%0A<b>Примечание:</b> %0A".$message."%0A";

         $text .= "%0A". "%0A". '---------------------------------';


         fOpen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

	//$success = mail("ownermail@gmail.com", $subject, $text, $headers);


//$troubles[$i]>='0' && $troubles<='9'
?>
