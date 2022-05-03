<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model{
    protected $table = "city";
    //protected $hidden = ['created_at, updated_at'];

    // protected $fillable = [];

    public $timestamps = false;
}