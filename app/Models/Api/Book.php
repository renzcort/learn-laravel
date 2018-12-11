<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Api\Rating;

class Book extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];

    /*
    Relation One To Many
     */
    public function user() {
      return $this->belongsTo(User::class);
    }

    public function ratings()
    {
      return $this->hasMany(Rating::class);
    }
}
