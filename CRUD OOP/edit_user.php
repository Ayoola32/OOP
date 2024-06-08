<?php
include_once 'db.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if(isset($_GET['id'])) {
    $user->id = $_GET['id'];
    $user->readOne(); // fetch the user data
}


// form validation
if (isset($_POST['submit'])) {
    $user->name  = $_POST['name'];
    $user->email = $_POST['email'];
    $user->age   = $_POST['age'];

    if($user->update()){
        echo "<div class='alert alert-success'>User updated successfully.<a href='index.php'> View all Users</a></div>";
    }else {
        echo "<div class='alert alert-danger'>Unable to update user.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Edit User</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$user->id}"); ?>" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $user->email; ?>" required>
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input type="number" class="form-control" name="age" value="<?php echo $user->age; ?>" required>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
            <button type="submit" class="btn btn-primary" name="submit">Update User</button>
        </form>
    </div>
</body>
</html>

