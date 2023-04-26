<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number1 = isset($_POST["num1"]) ? (int) $_POST["num1"] : null;
  $number2 = isset($_POST["num2"]) ? (int) $_POST["num2"] : null;
  $operator = isset($_POST["operator"]) ? $_POST["operator"] : null;

  $result = null;
  $error = null;

  switch ($operator) {
    case "+":
      $result = $number1 + $number2;
      break;
    case "-":
      $result = $number1 - $number2;
      break;
    case "*":
      $result = $number1 * $number2;
      break;
    case "/":
      if ($number2 === 0) {
        $error = "На ноль делить нельзя!";
      } else {
        $result = $number1 / $number2;
      }
      break;
    default:
      $error = "Неверный оператор!";
  }

  if ($error) {
    echo "<p style='color:red;'>{$error}</p>";
  } else {
    echo "<p>Результат: {$number1} {$operator} {$number2} = {$result}</p>";
  }
}
?>
<!-- Область основного контента -->

<form action="" method="POST">
  <label>Число 1:</label>
  <br />
  <input name="num1" type="text" />
  <br />
  <label>Оператор: </label>
  <br />
  <select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <br />
  <label>Число 2: </label>
  <br />
  <input name="num2" type="text" />
  <br />
  <br />
  <input type="submit" value="Считать">
</form>
<!-- Область основного контента -->