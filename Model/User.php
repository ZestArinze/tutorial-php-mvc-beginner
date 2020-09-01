<?php

namespace Model;

class User {
    
    public $id;
    public $name;
    public $bio;

    public function __construct($id, $name, $bio)
    {
        $this->id = $id;
        $this->name = $name;
        $this->bio = $bio;
    }
}