<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    public function test()
    {

      return $this->hasMany(question::class);
    }

}
