<?php
namespace Telegram_bot{
class chat{
    protected  $ch;
    public function __construct($UP){
  
  $this->self=$UP;
  
    }
  public function id():string{return $this->id;}
  public function first_name(){return $this->first_name;}
  public function last_name(){return $this->last_name;}
  public function username(){return $this->username;}
  public function title(){return $this->title;}
  public function type(){return $this->type;}
  public function bio(){return $this->bio;}
  }

}  
?>