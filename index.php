<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Simple Caculator</h3>
<form method="post">
    <label>First operand</label>
    <input type="number" name="num1" id="num1"><br>
    <label>Operator</label>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <label>Second operand</label>
    <input type="number" name="num2" id="num2"><br>
    <input type="submit">
</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Nhap lai";
        } else {
            $result = $num1 / $num2;
        }
        break;
}
echo("Ket qua: " . $num1 . $operator . $num2 . " = " . $result);
?>
</body>
</html>