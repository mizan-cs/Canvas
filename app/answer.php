<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
      return $this->belongsTo(question::class);
    }

    public function user()
    {
      return $this->belongsTo(user::class);
    }
}
