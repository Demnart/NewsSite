<?php

namespace App\Controllers;


class AdminControllers
{

    public function add($data)
    {
        $item = new \App\Models\News();
        $item->idTag  = $data['idTag'];
        $item->title = $data['title'];
        $item->text = $data['text'];
        $item->author = $data['author'];
        $item->save();
    }

    public function update($data)
    {
        $item = new \App\Models\News();
        $item->id = $data['id'];
        $item->idTag = $data['idTag'];
        $item->title = $data['title'];
        $item->text = $data['text'];
        $item->author = $data['author'];
        $item->save();
    }

    public function deletByTitle($data)
    {
        $item = new \App\Models\News();
        $item->title = $data['title'];
        $item->delete();
    }
}