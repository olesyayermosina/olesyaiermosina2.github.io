<?php


namespace App\Models;


class MyModel
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function checkId(){
        $str = '';
        if($this->getId()==325){
            $str = 'inform123';
        }
        return $str;
    }


}
