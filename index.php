<?php
function connect($API_KEY,$method,$data=[]){
   $path='api.telegram.org/bot'.$API_KEY.'/'.$method;
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$path );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    $rec=curl_exec($ch);
    if(curl_error($ch))
    var_dump(curl_error($ch));
    else return json_decode($rec);

}


$API_KEY='789483519:AAE8c1b3qbKnFoEGTsnDt6PskxhUbN1jHhY';

$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$text=$message->text;


connect($API_KEY,'sendmessage',['chat_id'=>$chat_id,'text'=>'hello world'.$text]);

?>



