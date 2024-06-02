<?php

require_once 'src/User.php';
require_once 'src/UserService.php';

use App\Models\User;
use App\Services\UserService;

$user = new User("Alice");
$userService = new UserService();
$userService->printUserName($user);


