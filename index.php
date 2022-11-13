
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

else if(strtolower($text)=='/typemessage'){
$type="type :";
foreach ($message->entities as $key => $value) {
    if($key=='type')
    $type.=$value;
}
    $A->method->sendmessage(['chat_id'=>$chat_id ,'reply_to_message_id'=>$message->message_id,'text'=>$type]);



}
else if(strtolower($text)=='/start')$A->method->sendmessage(
[
'chat_id'=>$chat_id,'text'=>'hi','reply_markup'=>json_encode(  [  'inline_keyboard' => [
        [
            ['text' => 'COMMANDS', 'url' => "tg://user?id={$message->from->id}"]
        ],
 [
           ['text' => 'COMMANDS', 'url' => "tg://user?id={$message->from->id}"],  ['text' => 'COMMANDS', 'url' => "tg://user?id={$message->from->id}"]
        ]
]
    ])
]);else if(strtolower( $text)=='hello' ){
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in  {$chat->first_name}\n id: {$chat_id}",'reply_to_message_id'=>$message->message_id]);}


else if(strtolower($text)=='delete')
                                   {$A->method->deletemessage(['chat_id'=>$chat_id,'message_id'=>$message->reply_to_message->message_id]);
                                    $A->method->deletemessage(['chat_id'=>$chat_id,'message_id'=>$message->message_id]);
                                    }

else   $A->method->sendmessage(['chat_id'=>$chat_id ,'reply_to_message_id'=>$message->message_id,'text'=>"sorry not found "]);
 




function getstring($data){
    
    $text="";
        foreach ($data as $key => $value) {
         
    if(is_object($value))
   $text.= getstring($value);
           else if(is_array($value))
    $text.= $key.": ".implode($value)."\n";
    else
         $text.=$key." : ".$value."\n";
      }
     
      return  $text;
}

?> 
