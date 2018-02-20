<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    public function user()
    {
      return $this->belongsTo(user::class);
    }

    public function category()
    {
      return $this->belongsTo(category::class);
    }

    public function fames()
    {
      return $this->hasMany(fame::class);
    }

    public function answers()
    {
      return $this->hasMany(answer::class);
    }

    public function tags()
    {
      return $this->belongsToMany(tag::class);
    }
}
