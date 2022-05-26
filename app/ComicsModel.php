<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicsModel extends Model
{
    //
    public $table = "comicsIstances";

    protected $fillable = ['title', 'description', 'type', 'series', 'thumb', 'sale_date'];
}
