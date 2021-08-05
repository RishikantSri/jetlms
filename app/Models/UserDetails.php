<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class UserDetails extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable = [ 
        'user_id','firstname','gender','lastname','second_email',
        'phone', 'status', 'address_line1','address_line2',
        'address_city','address_state','address_country',
        'address_pincode','qualification','lincense_number',
        'image_path','twitter','linkedin','facebook','skype',
        'instagram',
        'updated_at',
        'deleted_at',
                               
          ];
          
           
           
}
