<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // validations
    $isError = false;

    if (empty($_POST['number1'])) {
        $isError = true;
        echo 'Please enter number1<br>';
    }

    if (empty($_POST['number2'])) {
        $isError = true;
        echo 'Please enter number2<br>';
    }

    if (empty($_POST['operation'])) {
        $isError = true;
        echo 'Please enter operator<br>';
    }

    if (!empty($_POST['operation']) && !in_array($_POST['operation'], ['+', '-', '*', '/'])) {
        $isError = true;
        echo 'Invalid operator<br>';
    }

    if (
            !empty($_POST['operation']) &&
            !empty($_POST['number2']) &&
            !empty($_POST['number1']) &&
            $_POST['operation'] == '/' &&
            $_POST['number2'] == 0
    ) {
        $isError = true;
        echo 'Can\'t dived by zero<br>';
    }

}

?>

<html>
<body>
<form method="post">
    <input type="number" name="number1">
    <select name="operation">
        <option value>Select Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="number2">
    <button type="submit" value="register">=</button>
</form>

<?php
if (isset($isError) && $isError == false) { // valid data
    // Logic
    echo '<h1> Result: ' . calculator($_POST['number1'], $_POST['number2'], $_POST['operation']) . '</h1>';
}
?>
</body>
</html>