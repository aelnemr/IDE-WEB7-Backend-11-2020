<?php
// init
//register_shutdown_function("fatal_handler");
error_reporting(-1);
ini_set('display_errors', 1);

// autoload vendors and our file
require_once __DIR__ . "/vendor/autoload.php";

// config dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// database config
require_once 'config/Database.php';
global $dbh;
// write sql query
$sql = "SELECT * FROM `users`";
// prepare sql query
$stm = $dbh->prepare($sql);
// check if valid query
if ($stm->execute()) :
    // retrieve all data
    $users = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>full name</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['full_name'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php
else:
//    print_r( $stm->errorCode());
    echo 'Something wrong';
endif;
?>
