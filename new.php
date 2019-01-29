/*
<?php
/*
  if(isset($_POST['text'])){
    global $txt;
    $txt = $_POST['text'];
    //echo ucfirst($txt);
    echo trim($txt, " .");
  }
  require "new.php";
  require_once "new.php";
?>

<form action="index.php" method="post">
  <input type="text" name="text" value ="">
  <input type="submit" value="Submit">
</form>
*/
$car = array ("volvo", "mwn", "toyota");
$length = count($car);

for($i =0; $i<$length; $i++){
  echo $car[$i]. "<br>";
}
echo "<br/>";
$car = array(
  array("volvo","100","90"),
  array("bmw","10","30"),
  array("toyota","120","90"),

);
echo $car[0][2];

echo "<br/>";
//array_change_key_case

$name = array(

  "jahid" => "35",
  "Kader" => "33",
  "Mamun" => "20",
  "Akbar" => "23"
);
print("<pre>");
  print_r( array_change_key_case($name, CASE_UPPER) );
print("<pre>");

echo "<br/>";

$newname = array(

              array(
                'id' => '201',
                'first_name' => 'Abdulla',
                  'Last_Name' => 'Mamun',
              ),
              array(
                'id' => '202',
                'first_name' => 'jahid',
                'Last_Name' => 'hossain',
              ),
              array(
                'id' => '203',
                'first_name' => 'badal',
                'Last_Name' => 'Mamun',
              )

);

$lastname = array_column($newname, 'first_name', 'id');




print("<pre>");
  print_r( $lastname );
print("<pre>");


echo "<br/>";
echo "<br/>";

$name = array ("Jahid", "Mamun", "delowar");
$age = array("35", "40", "45");

$combine = array_combine($name, $age);

print("<pre>");
  print_r( $combine );
print("<pre>");

//52

echo "<br/>";
echo "<br/>";

$name = array ("Jahid", "Mamun", "delowar");
$age = array("35", "40", "45", "40");

$combine = 

print("<pre>");
  print_r( array_count_values($age) );
print("<pre>");


echo "<br/>";
echo "<br/>";

$array_one = array(
  'id' => '201',
  'first_name' => 'Abdulla',
  'Last_Name' => 'Mamun',
);


$array_two = array(
  'id' => '203',
  'first_name' => 'Abdulla',
  'Last_Name' => 'Mamun',
);

$array_diffe = array_diff($array_one, $array_two);

print("<pre>");
  print_r( array_count_values($array_diffe) );
print("<pre>");

echo "<br/>";
echo "<br/>";

$array_three = array(
  'a' => 'red',
  'b' => 'Abdulla',
  'c' => 'blue',
);


$array_four = array(
  'a' => 'red',
  'b' => 'blue',
  'c' => 'pink',
);

$diffe = array_diff($array_three, $array_four);


print("<pre>");
  print_r($diffe );
print("<pre>");

//intersect

echo "<br/>";
echo "<br/>";

$array_three = array(
  'a' => 'red',
  'b' => 'Abdulla',
  'c' => 'blue',
);


$array_four = array(
  'a' => 'red',
  'b' => 'blue',
  'c' => 'pink',
);

$result = array_intersect($array_three, $array_four);


print("<pre>");
  print_r($result );
print("<pre>");


//exits

$arr = array("name", "age");

if( array_key_exists(0, $arr)){
echo "Key already exits";
}
else{
  echo "Key does not exits";
}


echo "<br/>";
echo "<br/>";

//keys

$car = array(
  'volve' => 'xc121',
  'BMW' => 'x5',
  'Yotota' => 'Hightlander',
);

$result1 = array_keys($car);


print("<pre>");
  print_r($result1 );
print("<pre>");

function myfunctoin (){
  $v = strtoupper($vlue);
  return $v;
}

$arr = array(
  "Animal" => "cow",
  "Type" => "Animal"

);

$result3 = array_map("myfunction", $arr);

print("<pre>");
  print_r($result3 );
print("<pre>");



echo "<br/>";
echo "<br/>";


$arr = array("red","green");
$resul = array_pad($arr, -5, "blue");
*/


//.........................

<?php
echo "come from another page <br />";


/*
<?php

if(isset( $_POST['username'])){
  $name = $_POST['username'];
  echo "Username is :" .$name;
}
?>

<script>
  function formFunction(){
    var name = document.myform.usename.value;
    var showData = "Usename : "+name;
    document.getElementById('output').innerHTML = showData;
  }
</script>

<div id="output"></div>
<form action="" method="post" name="myform" id="myform" onsubmit="formFunction() ; return = false;">
  <table>
    <tr>
      <td>User Name: </td>
      <td><input type="text" name ="username" required="1"></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" value ="Submit">
        <input type="reset" value ="Clear">
      </td>
    </tr>

  </table>
</form>

<?php 
if(isset( $_POST['gender'])){
  $gen = $_POST['gender'];
  if($gen == "Male"){
    echo "Youre are Male";
  }
  elseif($gen == "Female"){
    echo "Youre are Female";
  }
  elseif($gen == "Others"){
    echo "Youre are Others";
  } 
  
}
?>


<form action="" method="post" name="myform" id="myform" >
  <table>
    <tr>
      <td>Gender: </td>
      <td><input type="radio" name ="gender" value="Male"></td>
      <td><input type="radio" name ="gender" value="Female"></td>
      <td><input type="radio" name ="gender" value="Others"></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" value ="Submit">
        <input type="reset" value ="Clear">
      </td>
    </tr>

  </table>
</form>

<script>
  function clickHere(){
    var genderleng = document.myform.gender.lenght;

  }
</script>


<form action="" method="post" name="myform" id="myform" onsubmit="clickHere(); return flase;" >
  <table>
    <tr>
      <td>Gender: </td>
      <td><input type="radio" name ="gender" value="Male"></td>
      <td><input type="radio" name ="gender" value="Female"></td>
      <td><input type="radio" name ="gender" value="Others"></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" value ="Submit">
        <input type="reset" value ="Clear">
      </td>
    </tr>

  </table>
</form>

<?php

  class Person{

    public $name = "Jahid Hossain";
    public $age;

    public function personName(){
      echo "Peson Name is:".$this->name."<br/>";
    }
    
    public function personAge($value){
      echo "Peson age is:".$this->age=$value;
    }
  }

  $personOne = new Person;
echo  $personONe->name;
$personOne->personName();
$personOne->personAge( 18 );

<?php

  class Person{

    public $name = "Jahid Hossain";
    public $age;

    public function personName(){
      echo "Peson Name is:".$this->name."<br/>";
    }
    
    public function personAge($value){
      echo "Peson age is:".$this->age=$value;
    }
  }

  $personOne = new Person;
echo  $personONe->name;
$personOne->personName();
$personOne->personAge( 18 );

?>

 
<?php 
include "functions.php";
?>


<form action="" method="post">
  <table>
    <tr>
      <td>
        Enter the first Number:
      </td>
      <td>
        <input type="number" name="num1">
      </td>
    </tr>
    <tr>
      <td>
        Enter the 2nd Number:
      </td>
      <td>
        <input type="number" name="num2">
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td><input type="submit" name="calculation" value="Calulate">
      </td>
    </tr>
  </table>
</form>

<?php


if(isset($_POST['calculation'])){
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

    if(empty($numOne) or empty($numTwo)){
      echo "Field must no be empty";
    }
    else{
      $cal = new Calculation;
      $cal->add($numOne, $numTwo );
      $cal->sub($numOne, $numTwo );
      $cal->mul($numOne, $numTwo );
      $cal->div($numOne, $numTwo );
    }
  }

?>

*/
