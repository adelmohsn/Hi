
 <?php
 require "lib.php";
use Telegram_bot\Telegram;
$API_KEY="789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY";
$A=new Telegram($API_KEY);

$message= $A->message(); 
$chat=$message->chat;
$chat_id=$chat->id;
$text="";
$msg=$A->getme(); 
  foreach ($msg as $key => $value) {
    $text .=$key ." : ".$value." "; 
 }
    $A->sendmessage(['chat_id'=>$chat_id,'text'=>$text]);

?>
