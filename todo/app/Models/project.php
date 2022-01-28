<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = "project";
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at' 
    ];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function users(){
        return $this->belongsToMany(User::class,'user_project','idProject','idUser','idProject','id');
    }
}
