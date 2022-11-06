
 <?php
 require "lib.php";
use Telegram_bot\Telegram;
$API_KEY="789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY";
$A=new Telegram($API_KEY);

$message= $A->message(); 
$chat=$message->chat;
$chat_id=$chat->id;
$text=$message->text;
if($text=='getme'){
 $A->method->sendmessage(getstring($A->method->getme));
}
function getstring($data){
    
    $text="";
        foreach ($data as $key => $value) {
    if(is_object($value))
    getstring($value);
    else
         echo $key.'  '.$value. '  '. '<p><\br><\p>';
      }   }




?>
