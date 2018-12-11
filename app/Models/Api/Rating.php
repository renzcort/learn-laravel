<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;
use App\Models\Api\Book;

class Rating extends Model
{
  protected $fillable = ['book_id', 'user_id', 'rating'];

    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
