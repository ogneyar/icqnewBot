<?
// Подключаем библиотеку с классом Bot
include_once 'icqNew-BotApi-php/Bot.php';

$token = "001.2839288818.3919878723:752122979";

// Создаем объект бота
$bot = new Bot($token);

$id_bota = substr(strstr($token, ':'), 1);	

$eventId = 0;

$bot->sendText("@Ogneyar_", "Цикл начат.");

do {
	$события = $bot->getEvents($eventId,150);

	foreach($события as $event) {
		$eventId = $event['eventId'];
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
	
	if (!$eventId) $eventId = 0;
	
	echo "Последнее событие: ".$eventId."<br><br>";
	
	if ($text=='q') {
		$bot->sendText($chatId, "клмн");
	}elseif ($text) $bot->sendText($chatId, "я не понимаю(");

}while ($eventId);

echo "Цикл окончен. <br><br>";
$bot->sendText("@Ogneyar_", "Цикл окончен.");

echo "<pre>"; print_r($события); echo "</pre>";

?>
