

<?php

class Person{

  public $name;
  public $age;

  public function __construct($name, $age){

    $this->name = $name;
    $this->age = $age;
  }

  public function personDatails(){
    echo "Person name is {$this->name} and person age is {$this->age}";
  }

}

$personOne = new Person("Jahid hossen", "28");
$personOne->personDatails();

echo "<br/>";
echo "<br/>";

?>
 