<?php
require __DIR__ .'/../autoload.php';
use App\Controllers\AdminControllers;

session_start();

if (!empty($_POST['idTag']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['author']))
{
    $data=[];

    $data['idTag'] = $_POST['idTag'];
    $data['title'] = $_POST['title'];
    $data['text'] =$_POST['text'];
    $data['author'] = $_POST['author'];
    $add = new AdminControllers();
    $add->add($data);
    header('Location: /index.php');
}
else
{
    $_SESSION['error'] = 'Не заполнено одно из полей!!!';
    header('Location: /Views/add.php');
}
