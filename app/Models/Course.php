<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [ 
        'title', 'slug','category',
        'description', 'course_image','rating',
        'likes','start_date','published','author','price',
        'show_at_home','created_at',
        'updated_at',
        'deleted_at',
                               
          ];

   public function Author()
    {
        return $this->belongsto(User::class,'author', 'id');
        
    }

    
}
