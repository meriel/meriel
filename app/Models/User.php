<?php


use Meriel\Database\Bridget\Model;

class User extends Model
{

    protected $table = "user";


    function phone()
    {
        return $this->hasOne('Phone');
    }

}