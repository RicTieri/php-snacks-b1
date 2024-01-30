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

echo 'Risultato con valore errato: ';

try {
  echo $john->setAge(44.5);
} catch (Exception $e){
  echo '<br>Eccezione con messaggio: ' . $e->getMessage() .'<br><br>';
}


echo 'Risultato con valore giusto: ';

try {
  echo $john->setAge(44);
} catch (Exception $e){
  echo '<br>Eccezione con messaggio: ' . $e->getMessage() .'<br><br>';
}