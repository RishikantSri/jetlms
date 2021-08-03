<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\SiteSettingFooter;
use Illuminate\Database\Seeder;
use App\Models\SiteSettingTop;
use Illuminate\Support\Facades\Hash;

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
                                 'heading' => 'Learning Today,Leading Tomorrow',
                                 'sub_heading' => 'We are team of talented Trainer, for giving the best to students ',
                                 'button_text' => 'Get Started',
                                 'background_image' => 'bacjgriung Image',
                                 'logo' => 'Logo image',

                                ]);

        SiteSettingFooter::create(['address' => 'Address',
                                'phone' => '1234567890',
                                'email' => 'info@lmsjet.com',
                                'newsletter_message' => 'Newsletter_message',
                                'copyright_message' => 'All rights reserved',
                                'twitter' => 'Twitter',
                                'instagram' => 'Instagram',
                                'facebook' => 'Facebook',
                                'linkedin' => 'Inkedin',
                                'skype' => 'Skype',

                               ]);  
        
                 User::create([
                            'name' => 'Admin',
                            'email' => 'admin@rishikantsri.tech',
                            'password' => Hash::make('password'),
                            'role_id' => '1'
                               ]);                          
                                
                                                 
       
    }
}
