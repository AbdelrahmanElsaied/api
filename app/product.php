<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ="Products";
    protected $fillable = ['name', "price"];
};
