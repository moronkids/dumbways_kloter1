<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    //
    public $timestamps = false;
    protected $table = "nama";
    protected $fillable = ['id','nama'];

    public function users_hobbies()
    {
        return $this->belongsTo('App\Users_hobbies');
    }
}
