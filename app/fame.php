<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fame extends Model
{
    public function user()
    {
      return $this->belongsTo(user::class);
    }

    public function question()
    {
      return $this->belongsTo(question::class);
    }
}
