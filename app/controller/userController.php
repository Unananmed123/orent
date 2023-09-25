<?php
namespace controller;


use core;
use database;
use roles\roleCore;

class userController extends core\userFunction
{

    public function behaviors(){
        return [
            'access' => [],
            'rules' => [
                [
                    'actions' => ['registration'],
                    'roles' => [roleCore::RoleGuest],
                    'matchCallback' => function(){
                        $this->redirect('/users/registration');
                    }
                ]
            ]
        ];
    }
    public function actionReg()
    {
        $error_message = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['btn_reg'])){
            $username = !empty($_POST['username']) ? $_POST['username'] : null;
            $login = !empty($_POST['login']) ? $_POST['login'] : null;
            $password = !empty($_POST['password']) ? $_POST['password'] : null;
            $confirm_password = !empty($_POST['confirm_password']) ? $_POST['confirm_password'] : null;

            if (empty($username)){
                $error_message .= 'Введите ваше имя';
            }
            if (empty($login)){
                $error_message .= 'Введите ваш логин';
            }
            if (empty($password)){
                $error_message .= 'Введите ваш пароль';
            }
            if ($confirm_password != $password){
                $error_message .= 'Пароли не совпадают';
            } else{
                $error_message .= 'Введите пароль повторно';
            }
            if (empty($error_message)){
                $user_id = $this->insert('insert into users (username, login, password) values (:username, :login, :password)' , [
                    'username' => $username,
                    'login' => $login,
                    'password' => $password
                ]);
                if (!empty($user_id)){
                    $this->redirect('/index');
                }
            }
        }
    }
}