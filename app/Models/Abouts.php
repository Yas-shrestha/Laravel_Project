<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
    protected $fillable = ['top_title', 'title', 'top_desc', 'description'];
}
