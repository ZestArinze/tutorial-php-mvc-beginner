<?php

namespace Helper;

require_once('./Model/User.php');

use Model\User;

/**
 * 
 * this tutorial does not focus on databases, so
 * let's have some fake db to provide the needed data
 * 
 */
class DB {
    private const USERS = [
        1 => [1, 'Arinze Anakor', 'The guy that likes to code.'],
        2 => [2, 'John Doe', 'That popular name in the programming world!'],
        3 => [3, 'Mary Lucy', 'Someone, somewhere in this world with that name.'],
        4 => [4, 'Leo Messi', 'Soccer legend, a famous footballer.'],
    ];

    public static function getAllUsers(): array {

        $users = [];
        foreach(DB::USERS as $id => $userData) {
            $users[$id] = new User($id, $userData[1], $userData[2]);
        }

        return $users;
    }

    /**
     * get user with the passed $userId
     */
    public static function getUser(int $userId = 0): ?User {

        foreach(DB::USERS as $id => $userData) {
            if($id === $userId) {
                return new User($id, $userData[1], $userData[2]);
            }
        }

        return null;
    }
}