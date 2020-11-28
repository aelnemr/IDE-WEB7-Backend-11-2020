<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = validation($_POST);
}

?>

<html>
<body>
<form method="post">
    <input type="number" name="number1">
    <span>
        <?php
        if (isset($errors['number1'])) {
            echo $errors['number1'];
        }
        ?>
    </span>
    <select name="operation">
        <option value>Select Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <span>
        <?php
        if (isset($errors['operation'])) {
            echo $errors['operation'];
        }
        ?>
    </span>
    <input name="number2">
    <span>
        <?php
        if (isset($errors['number2'])) {
            echo $errors['number2'];
        }
        ?>
    </span>
    <button type="submit" name="form" value="register">=</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)) { // valid data
    // Logic
    echo '<h1> Result: ' . calculator($_POST['number1'], $_POST['number2'], $_POST['operation']) . '</h1>';
}
?>
</body>
</html>