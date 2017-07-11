<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 11.07.17
 * Time: 14:05
 */

namespace App\Controllers;
use App\Classes\View;
use App\Models\News;

class Politika
{

    public function actionAll()
    {
        $idTag = 1;//$idTag=1 == Politika
        $items = News::findByIdTag($idTag);
        $view = new View();
        $view->items = $items;
        $view->display('news/politika.php');
    }
}