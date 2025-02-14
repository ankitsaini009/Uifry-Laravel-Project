<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcoment extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'services_id', 'name', 'email', 'description','blog_id'];
}
