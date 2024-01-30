<?php

class Person {
  public $name;
  public $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function setAge($num){
    if(is_int($num)){
      $this->age = $num;
      echo $this->age;
    } else {
      throw new Exception('Given arguments MUST be of type integer!');
    }
  }
}

$john = new Person('john', 33);

try {
  echo $john->setAge(44.5);
} catch (Exception $e){
  echo '<br>Eccezione con messaggio: ' . $e->getMessage() .'<br><br>';
}