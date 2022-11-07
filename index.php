
 <?php
 require "lib.php";
use Telegram_bot\Telegram;
$API_KEY="789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY";
$A=new Telegram($API_KEY);

$message= $A->Message; 
$chat=$message->chat;
$chat_id=$chat->id;
$text=$message->text;
if(strtolower($text)=='\getme'){
 $A->method->sendmessage(['chat_id'=>$chat_id ,'text'=>getstring($A->method->getme())]);
}
else if (strtolower($text)=='\getchat'){

    $A->method->sendmessage(['chat_id'=>$chat_id ,'text'=>getstring($A->method->getchat($chat_id))]);
}
else $A->method->sendmessage(['chat_id'=>$chat_id ,'text'=>'sorry not found']);
function getstring($data){
    
    $text="";
        foreach ($data as $key => $value) {
    if(is_object($value))
    getstring($value);
    else
         $text.=nl2br($key.'  '.$value.'\n');
      }return $text;
}




?>
