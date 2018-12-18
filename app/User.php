<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Api\Book;
use App\Models\Api\PostApi;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
      Relation Model One To Many
     */
    public function posts() {
      return $this->hasMany('App\Models\Post'); 
    }

    /*
      Relation Model One To Many
     */
    public function books(){
      return $this->hasMany(Book::class);
    }

    // generate Token
    public function generateToken() {
      $this->api_token = str_random(60);
      $this->save();
      return $this->api_token;
    }

    // show post with authentification
    public function postapis()
    {
      return $this->hasMany(PostApi::class);
    }

    // policy
    public function ownsPostApi(PostApi $postapi)
    {
      return auth()->id() === $postapi->user->id;
    }
}
