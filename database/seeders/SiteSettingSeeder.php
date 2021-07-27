<?php

namespace Database\Seeders;

use App\Models\SiteSettingFooter;
use Illuminate\Database\Seeder;
use App\Models\SiteSettingTop;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteSettingTop::create(['sitetitle' => 'Jet LMS',
                                 'heading' => 'Learning Today, Leading Tomorrow',
                                 'sub_heading' => 'We are team of talented Trainer, for giving the best to students ',
                                 'button_text' => 'Get Started',
                                 'background_image' => 'bacjgriung Image',
                                 'logo' => 'Logo image',

                                ]);

        SiteSettingFooter::create(['address' => 'Address',
                                'phone' => 'Phone',
                                'email' => 'Email',
                                'newsletter_message' => 'Newsletter_message',
                                'copyright_message' => 'Copyright_message',
                                'twitter' => 'Twitter',
                                'instagram' => 'Instagram',
                                'facebook' => 'Facebook',
                                'inkedin' => 'Inkedin',
                                'skype' => 'Skype',

                               ]);    
                                                 
       
    }
}
