<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_details extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'category', 'client', 'date', 'url', 'title', 'description'];
}
