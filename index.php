
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

else if(strtolower($text)=='/start')$A->method->sendmessage(
[
'chat_id'=>$chat_id,'text'=>'hi','reply_markup'=>json_encode(  [  'inline_keyboard' => [
        [
            ['text' => 'COMMANDS', 'url' => "tg://user?id={$message->from->id}"]
        ],
 [
            ['text' => 'COMMANDS', 'url' => "tg://user?id={$message->from->id}"]
        ]
]
    ])
]);
else if(strtolower( $text)=='hello' and ($chat->type=="supergroup")){
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in this group:\n name: {$message->from->first_name}\n user_name: @{$message->from->username}\n id: {$message->from->id}",'reply_to_message_id'=>$message->message_id]);}
else if (strtolower( $text)=='hello'and ($chat->type=="private")  )
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in this bot \n name: {$chat->first_name}\n id:{$chat->id}\n user_name:{$chat->username}",'reply_to_message_id'=>$message->message_id]);
else if($text=='hello' and $chat->type=='channel' )
$A->method->sendmessage(['chat_id'=>$chat_id,'text'=>"welecome in this channel \n name: {$chat->first_name}\n link: {$chat->invite_link}",'reply_to_message_id'=>$message->message_id]);

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
