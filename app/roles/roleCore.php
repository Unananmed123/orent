<?php

namespace roles;

class roleCore
{
    const RoleGuest = 'guest';
    const RoleUser  ='user';
    const RoleAdmin = 'admin';

    public static function getRoleUser(){
        $result=self::RoleGuest;
        if (isset($_SESSION['user']['id'])&& isset($_SESSION['user']['is_admin'])){
            $result=self::RoleAdmin;
        } elseif (isset($_SESSION['user']['id'])){
            $result=self::RoleUser;
        }
        return $result;
    }
    public static function getMenuLinks(){
        $role=self::getRoleUser();
        if ($role === self::RoleUser or $role === self::RoleAdmin) {
            $list[] = [
                'title' => 'Главная страница',
                'link' => '/index'
            ];
        }
        $list[] = [
            'title' => 'Магазин',
            'link'  => '/views/magazine'
        ];
        $list[]=[
            'title'=>'мой профиль',
            'link'=>'/views/profile'
        ];
        $list[] =[
          'title' => 'illustration',
          'link' => '/views/illustration'
        ];

        return $list;
    }
}
