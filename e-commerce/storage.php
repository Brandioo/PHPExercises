<?php
class SessionStorage{
    private $sessionKey = "items";
    public function __construct($sessionKey = null){
       if($sessionKey){
           $this->sessionKey = $sessionKey;
       }
       if(!isset($_SESSION[$this->sessionKey])){
            $_SESSION[$this->sessionKey] = [];
       }
    }
    public function set($key, $value)
    {
        $_SESSION[$this->sessionKey][$key] = serialize($value);
    }
    public function get($key){
        if(!isset($_SESSION[$this->sessionKey][$key])){
            throw new Exception("Session with the given {$key} does not exists.");
        }
        return unserialize($_SESSION[$this->sessionKey][$key]);
    }
    public function delete($key){
        unset($_SESSION[$this->sessionKey][$key]);
    }
    public function destroy(){
        unset($_SESSION[$this->sessionKey]);
    }
    public function exists($key){
        return isset($_SESSION[$this->sessionKey][$key]);
    }
    public function getAll(){
        $result = [];
        foreach($_SESSION[$this->sessionKey] as $key => $item){
            $result[$key] = unserialize($item);
        }
        return $result;
    }
}