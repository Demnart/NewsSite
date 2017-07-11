<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 11.07.17
 * Time: 14:59
 */

namespace App\Controllers;


use App\Models\News;

class Proishestvia
{

    public function functionAll()
    {
        $idTag = 2;
        $items = News::findByIdTag(2);
    }
}