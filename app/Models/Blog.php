<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
  // softdelates / trash
  use SoftDeletes;
  protected $dates = ['deleted_at'];


    //create timestamp
  public $timestamps = true; //there is no column created_at, updated_at 

  // whitelist list yang di bolehkan untuk di isi
  protected $fillable = ['title', 'description'];

  // Blacklist list yang tidak dapat di isi
  // protected $guarded = ['id', 'created_at'];

}
