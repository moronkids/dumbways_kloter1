<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
    public $timestamps = false;
    protected $table = "nama";
    protected $fillable = ['id','nama'];

    public function users()
    {
        return $this->belongsTo('App\Users');
    }
}
