<!DOCTYPE html>
<html lang="<?php echo 'ar'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page <?php echo 5+6; ?></h1>
    <p>Hello form, <?php echo 'PHP'; ?></p>
    <a href="<?php echo 'http://google.com'; ?>">Click</a>
    <?php
    echo '
    <div>
        <h3>Title</h3>
        <p>Demo text</p>
        <style>
            * {
                background: green;
            }
        </style>
        <script> console.log("text from echo") </script>
    </div>
    ';

    ?>
</body>
</html>