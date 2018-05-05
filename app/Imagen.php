<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Imagen extends Model
{
    protected $table="imagenes";
    public $timestamps = false;

    protected $fillable = ['id_user', 'img', 'describe'];


    public function user(){
    	return $this->belongsTo(User::class);
    }
}
