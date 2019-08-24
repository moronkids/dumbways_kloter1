<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_hobby extends Model
{
    //
    public $timestamps = false;
    protected $table = "nama";
    protected $fillable = ['id','nama'];

    public function users()
    {
        return $this->belongsTo('App\Users');
    }
    public function hobbies()
    {
        return $this->hasMany('App\Hobbies');
    }
}
