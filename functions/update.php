<?php
session_start();
require_once __DIR__ . '/../autoload.php';

if (!empty($_POST['id']) && !empty($_POST['idTag']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['author']))
{
$data=[];
$data['id']= $_POST['id'];
$data['idTag'] = $_POST['idTag'];
$data['title'] = $_POST['title'];
$data['text'] = $_POST['text'];
$data['author'] = $_POST['author'];
$update = new \App\Controllers\AdminControllers();
$update->update($data);
header('Location: /index.php');
}
else
{
    $_SESSION['error'] = 'Не заполнено одно из полей';
    header('Location: /Views/update.php');
}