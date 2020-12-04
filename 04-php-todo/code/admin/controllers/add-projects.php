<?php
$errors = "";

if (empty($_POST['name'])) {
    $errors .= '&name=Name is required';
}

if (empty($_POST['project_manager'])) {
    $errors .= '&project_manager=Name is required';
}

if (empty($_POST['description'])) {
    $errors .= '&description=description is required';
}


if ($errors) {
    exit(header("Location: ?p=add-projects&errors=1$errors"));
}

// SQL DATABASE
header("Location: ?p=projects");
exit();

dynamic_form[dynamic_form][0][p_name]
dynamic_form[dynamic_form][0][remarks]