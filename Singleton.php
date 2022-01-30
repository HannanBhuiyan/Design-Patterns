<?php 

class Singleton {

  private static $instance = null;

  // Singletone should not be Constructor
  private final function __construct( ) {}

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
  private final function __clone(){}
 
  // Singletons should not be serialize & unserialize 
  public final function __wakeup(){}

}

// call instance
$singleton = Singleton::getInstance();
 
 



