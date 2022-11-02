</php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY';
$bot_username = 'ADELBOOOOT_bot';

try {
   
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key);

    $telegram.handle();

} 
catch (Longman\TelegramBot\Exception\TelegramException $e) {
   
  echo $e.getMessage();
}
?>
