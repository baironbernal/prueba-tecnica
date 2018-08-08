<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Image extends Model
{
    protected $table="images";
    public $timestamps = false;

    protected $fillable = ['id_user', 'img', 'description'];


    public function user(){
    	return $this->belongsTo(User::class, 'id_user');
    }
}
