<?php
defined('enter') or die();

//Коммиссия системы
//Будет вычтено при выборе исполнителя (при переводе ему средств)
define("COMMISSION", 5); // 5%

//Настройка MYSQL
$_DB = [

  //База данных 1
  "db1" => [
    "host" => "localhost", //Сервер
    "user" => "root",      //Пользователь
    "pass" => "",          //Пароль пользователя
    "name" => "vkt"        //Название базы данных
  ],

  //База данных 2
  "db2" => [
    "host" => "localhost",
    "user" => "root",
    "pass" => "password",
    "name" => "base2"
  ]

  //...

];

//Настройка REDIS
$_RD = [

  //База данных 1
  "db1" => [
    "host" => "127.0.0.1", //Сервер
    "port" => "6379",      //Порт
    "database" => "4",      //Порт
    "password" => "redis455840a"          //Пароль
  ]

  //...

];


?>