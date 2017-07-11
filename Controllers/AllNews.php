<?php
namespace App\Controllers;
use App\Classes\Exception404;
use App\Classes\View;
use App\Models\News as NewsModel;

class AllNews
{

    public function actionAll()
    {
        $items = NewsModel::findAll() ;
        if ($items === NULL)
        {
            throw new Exception404('ОООПС!!! Новости не существует');
        }
        $view = new View();
        $view->items = $items;
        $view->display('news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPk($id);
        if ($item === NULL)
        {
            throw new Exception404('ОООПС!!! Новости не существует');
        }
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');

    }
}