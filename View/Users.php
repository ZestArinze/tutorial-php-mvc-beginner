<?php

namespace View;

class Users {

    public function render($users = null) {

        if($users) {
            echo '<h2>Users</h2>';
            foreach($users as $user) {
                echo 'Name: ' . $user->name . '<br>';
                echo 'Bio: ' . $user->bio . '<br>';
                echo '<hr>';
            }
        }
    }

}