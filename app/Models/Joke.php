<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    use HasFactory;
    protected $table = 'jokes';
    protected $fillable = ['id','catagory','type', 'joke','created_at','updated_at'];
}
