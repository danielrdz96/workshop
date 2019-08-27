<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    use SoftDeletes;

    protected $table = "autores";
    //
}
