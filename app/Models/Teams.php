<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'twitter', 'facebook', 'instagram', 'linkedin', 'name', 'post'];
}
