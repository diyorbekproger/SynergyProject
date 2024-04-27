<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SynergyStudent extends Model
{
    use HasFactory;
    protected $fillable=['fullname','birth','password','email'];
}
