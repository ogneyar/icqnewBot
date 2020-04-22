<?
// Подключаем библиотеку с классом Bot
include_once 'icqNew-BotApi-php/Bot.php';

$token = "001.2839288818.3919878723:752122979";

// Создаем объект бота
$bot = new Bot($token);

$id_bota = substr(strstr($token, ':'), 1);	

$события = $bot->getEvents(0,0);

foreach($события as $event) {
	$lastEvent = $event['eventId'];
	$payload = $event['payload'];
		$chat = $payload['chat'];
			$chatId = $chat['chatId'];
			$chatType = $chat['type'];
		$from = $payload['from'];
			$firstName = $from['firstName'];
			$nick = $from['nick'];
			$userId = $from['userId'];
		$msgId = $payload['msgId'];
		$text = $payload['text'];
		$timestamp = $payload['timestamp'];
	$type = $event['type'];
}
echo "Последнее событие: ".$lastEvent."<br><br>";

echo "<pre>"; print_r($события); echo "</pre>";

$bot->sendText($событие[0]['payload']['chatId'], "Кууууууль");

/*
$событие = $bot->getEvents($lastEvent,5);

if ($событие[0]['payload']['text']=='ё') {
	$bot->sendText($событие[0]['payload']['chatId'], "клмн");
}else $bot->sendText($событие[0]['payload']['chatId'], "я не понимаю(");

?>
