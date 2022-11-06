
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
 $A->method->sendmessage(['chat_id'=>$chat_id ,'text'=>getstring($A->method->getme())]);
}
function getstring($data){
    
    $text="";
        foreach ($data as $key => $value) {
    if(is_object($value))
    $text.=getstring($value);
    else
         $text.=$key.' : '.$value.'<p></br></p>';
      } 
return $text;
}




?>
