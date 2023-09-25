<?php
 namespace core;

 use database;
 class userFunction extends \database\databaseFunc
 {
     public function addNewUser($username, $login, $password)
     {
     $password = password_hash($password, PASSWORD_DEFAULT);
     return $this->insert('insert into users (username, login, password) VALUES (:username, :login, :password)',[
         'login' => $login,
         'username' => $username,
         'password' => $password
     ]);
     }
     public function redirect($url){
         header('Location:' . $url);
         exit();
     }

     static public function errorCode($code)
     {
         http_response_code($code);
         $path='app/views/errors/'.$code.'.php';
         if (file_exists($path)){
             require $path;
         }
         exit();
     }


 }