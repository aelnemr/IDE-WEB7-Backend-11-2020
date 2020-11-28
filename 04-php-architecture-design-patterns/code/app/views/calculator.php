<?php
/*var_dump($_SERVER);*/
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $number1 = $_POST['number1'];
    echo $number1;
    /*if(!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['operation'])){

    }*/
}
?>

<html>
<body>
<form method="POST">
    <input type="number" name="number1" value="">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="number2" value="">
    <button type="submit" value="register">=</button>
</form>
</body>
</html>