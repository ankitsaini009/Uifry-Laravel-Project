<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'site_logo',
        'site_favicon',
        'contact_email',
        'contact_phone',
        'site_description',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'admin_penal_logo',
        'youtub_url'
    ];
}
