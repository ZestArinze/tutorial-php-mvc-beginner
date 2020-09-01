<?php

namespace Helper;

require_once('./Controller/UserController.php');
require_once('./View/User.php');
require_once('./View/Users.php');

use Controller\UserController;

class Router {

    /**
     * 
     * @param $path url path
     * @param $data optional data
     * 
     */
    public static function to(string $path, $data = null) {
        switch($path) {
            case 'user':
                $userController = new UserController();
                return $userController->getUser($data);
            break;
            case 'users':
                $userController = new UserController();
                return $userController->getAllUsers();
            break;
        }
    }
}