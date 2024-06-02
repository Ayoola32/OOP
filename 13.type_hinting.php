<?php
// Type hinting (also known as type declarations) in PHP allows you to specify the expected data type of an argument in a function or method. This helps to ensure that the correct type of data is passed to functions and methods, leading to more predictable and maintainable code.

// PHP supports type hinting for:

// Classes and interfaces
// Array types
// Scalar types (e.g., int, float, string, bool)
// Callable types

// Define a class
class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Define another class that uses User
class UserService {
    public function printUserName(User $user) { // Type hinting for the User class
        echo "User Name: " . $user->getName() . "<br>";
    }
}

// Create an instance of User
$user = new User("Alice");

// Create an instance of UserService
$userService = new UserService();

// Use the method with type hinting
$userService->printUserName($user); // Output: User Name: Alice

?>
