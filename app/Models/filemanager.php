<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filemanager extends Model
{
    use HasFactory;
    protected $fillable = ['name','details','img','ext','status'];
}
