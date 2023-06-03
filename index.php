<?php
if(isset($_POST['submit'])){
  // retrieve values from form
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  // perform calculation based on operator
  if($operator == "+"){
    $result = $num1 + $num2;
  } else if($operator == "-"){
    $result = $num1 - $num2;
  } else if($operator == "*"){
    $result = $num1 * $num2;
  } else if($operator == "/"){
    $result = $num1 / $num2;
  } else {
    echo "Invalid operator";
    exit();
  }

  // display result
  echo "<h1> Result: </h1>".$result;
}
?>

<form method="post">
  <input type="text" name="num1" placeholder="Enter number 1"><br>
  <input type="text" name="num2" placeholder="Enter number 2"><br>
  <select name="operator">
    <option value="+">Addition</option>
    <option value="-">Subtraction</option>
    <option value="*">Multiplication</option>
    <option value="/">Division</option>
  </select><br>
  <input type="submit" name="submit" value="Calculate">
</form>
