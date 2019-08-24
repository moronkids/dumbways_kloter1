<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public $timestamps = false;
    protected $table = "Users";
    protected $fillable = ['id','full_name', 'date_of_birth', 'place_of_birth', 'phone_number', 'address', 'last_education', 'religion'];

    public function user_hobby()
    {
        return $this->hasMany('App\Users_hobby');
    }

    public function cities()
    {
        return $this->hasOne('App\Cities');
    }
}
