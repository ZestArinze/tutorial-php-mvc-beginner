<?php

namespace Controller;

require_once('./Helper/ViewLoader.php');
require_once('./Helper/DB.php');

use Helper\ViewLoader;
use Helper\DB;

class UserController {

    public function getAllUsers() {
        return ViewLoader::load('users', DB::getAllUsers());
    }

    public function getUser(int $userId) {
        
        // user id must be greater than zero
        // you can add more of your own validations
        if($userId <= 0) {
            ViewLoader::load('404');
        }

        return ViewLoader::load('user', DB::getUser($userId));
    }
}