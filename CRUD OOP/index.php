<?php
include_once 'db.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// Fetch all users
$stmt = $user->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">User Management</h1>
        <a href="create_user.php" class="btn btn-primary mb-3">Add New User</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>";
                    echo "<a href='edit_user.php?id={$row['id']}' class='btn btn-info mr-2'>Edit</a>";
                    echo "<a onClick=\"javascript: return confirm('Are you sure you want to delete this Users Account?')\" href='delete_user.php?id={$row['id']}' class='btn btn-danger'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
