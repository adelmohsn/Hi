
 <?php
 require "lib.php";
use Telegram_bot\Telegram;
$API_KEY="789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY";
$A=new Telegram($API_KEY);
$message= $A->Message; 
$chat=$message->chat;
$chat_id=$chat->id;
$text=$message->text;

if(strtolower($text)=='/getme'){
 $A->method->sendmessage(['chat_id'=>$chat_id ,'reply_to_message_id'=>$message->message_id,'text'=>getstring($A->method->getme())]);
}
else if (strtolower($text)=='/getchat'){

    $A->method->sendmessage(['chat_id'=>$chat_id ,'reply_to_message_id'=>$message->message_id,'text'=>getstring($A->method->getchat($chat_id))]);
}

else $A->method->sendmessage(['chat_id'=>$chat_id ,'reply_to_message_id'=>$message->message_id,'text'=>"sorry not found type: {$chat->type}"]);
if($text=='hello' and ($chat->type=="supergroup")){
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in this group:\n name: {$message->from->first_name}\n user_name: @{$message->from->username}\n id: {$message->from->id}",'reply_to_message_id'=>$message->message_id]);}
else if($text=='hello' and $chat->type=='channel' )
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in this channel \n name: {$chat->first_name}\n link: {$chat->invite_link}",'reply_to_message_id'=>$message->message_id]);





function getstring($data){
    
    $text="";
        foreach ($data as $key => $value) {
         
    if(is_object($value))
   $text.= getstring($value);
           else if(is_array($value))
    $text.= implode($value);
    else
         $text.=$key." : ".$value."\n";
      }
     
      return  $text;
}

?>
