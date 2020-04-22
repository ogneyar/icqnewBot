<?
// Подключаем библиотеку с классом Bot
include_once 'myBotApi/Bot.php';

$token = "001.2839288818.3919878723:752122979";

// Создаем объект бота
$bot = new Bot($token);

$id_bota = substr(strstr($token, ':'), 1);	

$события = $bot->getEvents(0,0);

echo "<pre>"; print_r($события); echo "</pre>";

//echo "ЭЭЭЭЭЭЭЭ уфь";


?>
