<?php

namespace App\Classes;


class AbstractModel
{
    protected static $table;
    private $data=[];

    public function __set($name, $value)
    {
      $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
      return isset($this->data[$name]);
    }

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClass(get_called_class());
        return  $db->querry($sql);

    }

    public static function findOneByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db= new DB();
        $db->setClass(get_called_class());
        return $db->querry($sql,[':id'=>$id])[0];
    }

    public static function findByIdTag($idTag)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE idTag = :idTag';
        $db = new DB();
        $db->setClass(get_called_class());
        return $db->querry($sql,[':idTag' =>$idTag]);
    }

    protected function insert()
    {
        $cols = array_keys($this->data);
        $data=[];
        foreach ($this->data as $key=>$value)
        {
            $data[':'.$key] = $value;
        }

        $sql = 'INSERT INTO ' . static::$table .
        '('.implode(',',$cols).')
         VALUES 
         ('.implode(',',array_keys($data)).')';

        $db = new DB();
        $db->insertUpdateDelete($sql,$data);

    }

    protected function update()
    {
        $cols=[];
        $data=[];
        foreach ($this->data as $key=>$value)
        {
            $data[':' . $key] = $value;
            if ('id'==$key)
            {
                continue;
            }
            $cols[]=$key . '=:' . $key;

        }
        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(',',$cols) . ' WHERE id=:id';
        $db = new DB();
        $db->insertUpdateDelete($sql,$data);
    }

    public function save()
    {
        if (!isset($this->data['id']))
        {
            $this->insert();
        }
        else
        {
            $this->update();
        }

    }

    public function delete()
    {
        $cols = [];
        $data =[];
        foreach ($this->data as $key=>$value)
        {
            $cols[]= $key . '=:' . $key;
            $data[':' . $key] = $value;
        }
        $sql = 'DELETE FROM ' . static::$table . ' WHERE ' . implode(',',$cols);
        $db = new DB();
        $db->insertUpdateDelete($sql,$data);
    }

}