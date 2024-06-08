<?php
include_once 'db.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_POST) {
    // Assign POST values to user properties
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->age = $_POST['age'];

    if ($user->create()) { // Create a new user
        echo "<div class='alert alert-success'>User was created. <a href='index.php'>Home Page</a></div>";
    } else {
        echo "<div class='alert alert-danger'>Unable to create user.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Add New User</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
