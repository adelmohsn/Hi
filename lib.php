<?php
namespace Telegram_bot {
  require "method.php";
  require "chat.php";
  require "message.php";

class Telegram{
   public $Message;

protected $API_KEY;
protected $update;
protected $url="https://api.telegram.org/bot";
public   $method ;
public function __construct($API_KEY){
$this->API_KEY=$API_KEY;
$this->url=$this->url.$API_KEY;
$this->update=json_decode(file_get_contents('php://Input'));
  if(!is_null($this->update->channel_post))
$this->Message=$this->update->channel_post;
else
$this->Message=$this->update->message;
$this->method=new method($API_KEY);

}



public function chat():chat{return $update->message->chat;}
}
}
?>
