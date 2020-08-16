<?php
namespace App\Models;


use Meriel\Database\Bridget\Model;

class City extends Model
{

    protected $table = "city";

    function user()
    {
        return $this->hasOne('User');
    }
}