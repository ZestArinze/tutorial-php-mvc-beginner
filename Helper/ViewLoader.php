<?php

namespace Helper;

require_once('./Controller/UserController.php');
require_once('./View/User.php');
require_once('./View/Users.php');
require_once('./View/NotFound.php');

use Controller\UserController;
use View\User as UserView;
use View\Users as UsersView;
use View\NotFound;

class ViewLoader {

    /**
     * 
     * @param $path url path
     * @param $data optional data to pass to the view
     * 
     */
    public static function load(string $path, $data = null) {

        switch($path) {
            case 'users': 
                $view = new UsersView();
                return $view->render($data);
            case 'user': 
                $view = new UserView();
                return $view->render($data);
            case '404': 
                $view = new NotFound();
                return $view->render();
        }
    }
}