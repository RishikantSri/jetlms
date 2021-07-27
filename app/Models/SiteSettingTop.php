<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettingTop extends Model
{
    use HasFactory;
     protected $fillable = [ 
     'sitetitle',
     'heading',
     'sub_heading',
     'button_text',
     'background_image',
     'logo',
     'created_at',
     'updated_at',
     'deleted_at',
                            
       ];
     
}
