<?php
session_start();
require_once __DIR__ . '/../autoload.php';

if (!empty($_POST['title']))
{
$data=[];
$data['title'] = $_POST['title'];
$delete = new \App\Controllers\AdminControllers();
$delete->deletByTitle($data);
header('Location : /index.php');
}
else
{
    $_SESSION['error'] = 'Не заполнено название новости';
    header('Location: /Views/delete.php');
}
