<?php

require_once('database/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $profile = isset($_POST['image_url']) ? htmlspecialchars($_POST['image_url']) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (empty($name) || empty($age) || empty($email)) {

        echo " You must to all input";
        exit();
    }

    $data = [
        'profile' => $profile,
        'name' => $name,
        'age' =>  $age,
        'email' =>  $email
    ];
    createStudent($data);

    header("Location: index.php");
}
