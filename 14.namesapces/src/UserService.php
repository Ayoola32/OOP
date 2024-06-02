<?php

namespace App\Services;
use App\Models\User;

class UserService{
    public function printUserName(User $user){
        echo "User Name: " . $user->getName() . "\n"; // Ensure correct method name getName()

    }
}

