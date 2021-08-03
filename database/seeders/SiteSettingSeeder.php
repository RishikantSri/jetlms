<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\UserDetails;
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
                UserDetails::create([
                                'user_id' => '1',
                                'firstname' => 'firstname',
                                'lastname' => 'lastname',
                                'second_email' => 'second_email@rishikantsri.tech',
                                'phone' => '1234567123',
                                'status' => 'Active',
                                'address_line1' => 'address line1',
                                'address_line2' => 'address line2',
                                'address_city' => 'address city',
                                'address_state' => 'address state',
                                'address_country' => 'address country',
                                'address_pincode' => 'address pincode',
                                'qualification' => 'High School',
                                'lincense_number' => '3454',
                                'twitter' => 'twitter',
                                'linkedin' => 'linkedin',
                                'facebook' => 'facebook',
                                'skype' => 'skype',
                                'instagram' => 'instagram',
                                
                                   ]);   
                                   
                                                 
       
    }
}
