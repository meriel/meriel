<?php


class User extends \Meriel\Database\Bridget\Model{
    
    protected $table = "user";
    
    
    function phone()
    {
      return $this->hasOne('Phone');
    }
    
}