 <?php
if(isset($_POST['submit'])) {
$num1=($_POST['num1']);
$num2=($_POST['num2']);
$operator=($_POST['operator']);

if ($operator =="+"){
  $result= $num1 + $num2;
} elseif ($operator =="-"){
  $result= $num1 - $num2;
}elseif($operator =="*"){
  $result= $num1 * $num2;
}elseif($operator =="/"){
  $result= $num1 / $num2;
}else{ echo "no data";}

 echo "$result";

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






 



