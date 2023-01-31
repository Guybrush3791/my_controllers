<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degrees extends Model
{
    use HasFactory;

    private $id;
    private $name;
    private $level;
    private $address;
    private $email;
    private $website;

    public function getId() {

        return $this -> id;
    }
    public function setId($id) {

        $this -> id = $id;
    }
    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }
    public function getLevel() {

        return $this -> level;
    }
    public function setLevel($level) {

        $this -> level = $level;
    }
    public function getAddress() {

        return $this -> address;
    }
    public function setAddress($address) {

        $this -> address = $address;
    }
    public function getEmail() {

        return $this -> email;
    }
    public function setEmail($email) {

        $this -> email = $email;
    }
    public function getWebsite() {

        return $this -> website;
    }
    public function setWebsite($website) {

        $this -> website = $website;
    }
}
