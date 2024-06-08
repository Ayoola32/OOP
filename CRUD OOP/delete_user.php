<?php
include_once 'db.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if (isset($_GET['id'])) {
    $user->id = $_GET['id'];

    if ($user->delete()) {
        header("Location: index.php?message=User Deleted");
    } else {
        die("Error deleting user.");
    }
}
?>
