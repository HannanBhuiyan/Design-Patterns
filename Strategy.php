<?php 

interface Message {
  public static function notification();
}

class SendSms implements Message {
  public static function notification(){
     echo "sms send success";
  }
}

class MailSend implements Message {
  public static function notification(){
    echo "Mail send success";
  }
}


class User{
  public static function getMessage(){
    return "sms";
 }
}

$user = User::getMessage();

switch($user){
  case 'sms':
    $objnotify = SendSms::notification();
    break;
  case 'mail':
    $objnotify = MailSend::notification();
    break;
  default:
    echo "Something is wrong !";
}

 



 