<?php


class City extends \Meriel\Database\Bridget\Model{
    
    protected $table = "city";
    
    function user()
    {
      return $this->hasOne('User');
    }
}