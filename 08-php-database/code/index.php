<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Backend</title>
</head>
<body>
<div class="container mt-5">
    <h1><a href="/">Back to home</a></h1>
    <h3 class="mt-5">Session:</h3>
    <ul class="list-group list-group-flush mt-3">
        <?php
        foreach (array_diff(scandir(__DIR__), ['.', '..', 'README.md', 'index.php', '.git', '.idea']) as $i => $dir):
            ?>
            <li class="list-group-item">
                <a href="<?= "$_SERVER[REQUEST_URI]{$dir}" ?>"><?= ucwords(str_replace(['-', 'php'], [' ', 'PHP'], $dir), ' ') ?></a>
            </li>
        <?php
        endforeach
        ?>
    </ul>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>