<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcoment extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'services_id', 'name', 'email', 'description', 'blog_id'];

    public function replies()
    {
        return $this->hasMany(Blogcoment::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Blogcoment::class, 'parent_id');
    }
}
