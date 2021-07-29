<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettingFooter extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'address',
        'phone',
        'email',
        'newsletter_message',
        'copyright_message',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'skype',
        'created_at',
     'updated_at',
     'deleted_at',
          ];
    
}
