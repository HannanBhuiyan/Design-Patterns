<?php 

class Singleton {

  private static $instance = null;

  // Singletone should not be Constructor
  private function __construct( ) {}

  // Create new instance
  public static function getInstance(){
    if(static::$instance === null){
        static::$instance = new Singleton();
        echo "Create new instance <br>";
    }else {
      echo "Create old instance <br>";
      return static::$instance;
    }


  }

  // Singletons should not be cloneable.
  private function __clone(){}
 
  // Singletons should not be serialize & unserialize 
  public function __wakeup(){}

}

// call new instance
$singleton = Singleton::getInstance();
 
 



