<?php
namespace Telegram_bot{

 class method{
protected $token;
protected $url="https://api.telegram.org/bot";
public function __construct($token){
$this->token=$token;
$this->url.=$token;
}

public function editmessage($data){

return $this->editmsg("/editMessageText",$data);



}
protected function editmsg($method,$data){

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url.$method);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$rec=curl_exec($ch);
    if(curl_error($ch))
    var_dump(curl_error($ch));
    else return json_decode($rec);
}
  
  
public function deletemessage($data){ 
    return $this->delete("/deletemessage",$data);
}
protected function delete($method,$data){
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url.$method);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$rec=curl_exec($ch);
    if(curl_error($ch))
    var_dump(curl_error($ch));
    else return json_decode($rec);
}
public function sendmessage($data){
   
  return  $this->send("/"."sendmessage",$data);
    
  
  }
protected function send($method,$data){
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url.$method);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$rec=curl_exec($ch);
    if(curl_error($ch))
    var_dump(curl_error($ch));
    else return json_decode($rec);
}
public function getme(){
return $this->get("/"."getme");

}
public function getchat($chat_id){
    return $this->get("/"."getchat?chat_id={$chat_id}");
    
    }
protected function get($method){
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url.$method);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$rec=curl_exec($ch);
    if(curl_error($ch))
    var_dump(curl_error($ch));
    else return json_decode($rec);
}


}






}




?>
