<?php

// Railway muhitidagi o'zgaruvchilarni avtomatik olish
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE');
$port = getenv('MYSQLPORT');

// Ma'lumotlar bazasiga ulanish
$connect = mysqli_connect($host, $user, $pass, $db, $port);
mysqli_set_charset($connect, "utf8mb4");

if($connect){
    // Jadvallar mavjud bo'lmasa, ularni avtomatik yaratish
    mysqli_query($connect,"CREATE table IF NOT EXISTS user_id(
    id int(20) auto_increment primary key,
    user_id varchar(100),
    refid varchar(100),
    reg varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS kabinet(
    id int(20) auto_increment primary key,
    user_id varchar(100),
    pul varchar(100),
    pul2 varchar(100),
    odam varchar(100),
    number varchar(100),
    ban varchar(100),
    status varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS api(
    id int(20) auto_increment primary key,
    user_id varchar(100),
    api varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS kunlik(
    id int(20) auto_increment primary key,
    user_id varchar(100),
    useri varchar(100),
    turi varchar(100),
    tokeni varchar(100),
    vaqti varchar(100),
    narxi varchar(100),
    kun varchar(100),
    avto varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS card(
    id int(20) auto_increment primary key,
    user_id varchar(100),
    cc varchar(100),
    fc varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS uid(
    uid int(20) auto_increment primary key,
    user_id varchar(100)
    )");

    mysqli_query($connect,"CREATE table IF NOT EXISTS game_dice(
    dice_id int(20) auto_increment primary key,
    owner varchar(100),
    member varchar(100),
    rate varchar(100),
    score1 varchar(100),
    score2 varchar(100),
    status varchar(100)
    )");

    // echo "Ulandi va jadvallar tekshirildi!"; 
} else {
    // echo "Ulanmadi: " . mysqli_connect_error();
}

?>
