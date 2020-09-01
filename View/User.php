<?php

namespace View;

class User {
    public function render($user = null) {
        if($user) {
            echo '<h2>User</h2>';
            echo 'Name: ' . $user->name . '<br>';
            echo 'Bio: ' . $user->bio . '<br>';
            echo '<hr>';
        }
    }
}