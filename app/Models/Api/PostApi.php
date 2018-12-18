<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PostApi extends Model
{
    protected $fillable = [
      'user_id', 'content'
    ];

    // set query 
    public function scopeLatestFirst($query)
    {
      return $query->orderBy('id', 'Desc');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
