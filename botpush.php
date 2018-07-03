<?php



require "vendor/autoload.php";

$access_token = 'A2vi8pE1X2HAQIM8goe1u+naF4fjT21H60PhWLovTesoSjtJrm2pFXqDZsfKHzj0d+Ly1TvYtrZQfZOI++JbMGgZuWZE+5/GWhPQpgCiVhFYq3jv89lB55itG8s7y1msC0wxu2ZeMArAr5KTuCUj2gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6b22c4107de7c703fea210a87981ef3a';

$pushID = 'Uaa9dae6e226dcda1fd4d2b907cde6b23';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







