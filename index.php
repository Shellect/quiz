<?php
include_once "./views/header.php";

$page = $_POST["page"] ?? 0;
switch ($page) {
    case '0':
        include "login.php";
        break;
    case '1':
        $email = $_POST['email'] ?? '';
        if ($email == '') {
            echo '<p>Отсутствует email</p>';
            echo '<a href="/">Назад</a>';
            include_once "./views/footer.php";
            exit();
        } 
        include 'page1.php';
        break;
    case '2':
        include 'page2.php';
        break;
    case '3':
        include 'page3.php';
        break;
    case '4':
        include 'result.php';
        break;
    default:
        include 'not_found.php';
        break;
}
include_once "./views/footer.php";