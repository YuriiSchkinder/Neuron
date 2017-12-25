<?php
class Session{
    protected static $message;
  public static function setMessage($message){
      self::$message=$message;
  }
  public static function hasMessage(){
      return !is_null(self::$message);
  }
  public static function getMessage(){
      echo self::$message;
      self::$message=null;
  }
  public static function valuesForm($bool,$value){
          return !$bool? $value: '';
  }
  public static function set($key,$value){
      $_SESSION[$key]=$value;
  }
  public static function get($key){
      return isset($_SESSION[$key]) ? $_SESSION[$key] :null;
  }
  public static function delete($key){
      if(isset($_SESSION[$key])){
          unset($_SESSION[$key]);
      }
  }
  public  static function destroy(){
      session_destroy();
}
}
?>