<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricings extends Model
{
    use HasFactory;
    protected $fillable = ['plan', 'cost', 'feature_1', 'feature_2', 'feature_3', 'feature_4', 'feature_5'];
}
