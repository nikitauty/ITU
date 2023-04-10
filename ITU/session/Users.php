<?php

class Users{
    protected $login;
    protected $pass;
    public function __construct(){
        $this->login = '';
        $this->pass = '';
    }
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
    public function setPassword(string $pass): void
    {
        $this->pass = $pass;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getPassword(){
        return $this->pass;
    }
    public function auth($login, $pass) {
        if ($this->login === 'lol' AND $this->pass === '1234') {
            return true;
        }
        return false;
    }
}
