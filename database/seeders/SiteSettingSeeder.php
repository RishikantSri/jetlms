<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\UserDetails;
use App\Models\SiteSettingFooter;
use Illuminate\Database\Seeder;
use App\Models\SiteSettingTop;
use Illuminate\Support\Facades\Hash;
use DB;

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
                                 'sub_heading' => 'We are team of talented Trainer, for giving the best to trainees ',
                                 'button_text' => 'Get Started',
                                 'background_image' => '/storage/default/background.jpg',
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
        
                 // check if table users is empty
        if(User::count() == 0){

          
           $users =     [

                [
                    'name' => 'Admin',
                     'email' => 'admin@rishikantsri.tech',
                     'password' => Hash::make('password'),
                     'role_id' => '1'
                ],
                
                [
                    'name' => 'Trainer 1',
                     'email' => 'trainer1@rishikantsri.tech',
                     'password' => Hash::make('password'),
                     'role_id' => '2'
                ],
                [
                    'name' => 'Trainer 2',
                     'email' => 'trainer2@rishikantsri.tech',
                     'password' => Hash::make('password'),
                     'role_id' => '2'
                ],
                [
                    'name' => 'Trainer 3',
                     'email' => 'trainer3@rishikantsri.tech',
                     'password' => Hash::make('password'),
                     'role_id' => '2'
                ],
               
               

            ];
            User::insert($users);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; } 

        

        // insert into UserDetails table
        
        if(UserDetails::count() == 0){

          
            $usersdetails =     [
 
                 [
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
                    'address_pincode' => '1111',
                    'qualification' => 'High School',
                    'lincense_number' => '3454',
                    'twitter' => 'twitter',
                    'linkedin' => 'linkedin',
                    'facebook' => 'facebook',
                    'skype' => 'skype',
                    'instagram' => 'instagram',
                    'image_path' => '/storage/default/avatar.png',
                     'gender' => 'Male',
                     'show_at_home' => '0',
                 ],
                 
                 [
                    'user_id' => '2',
                    'firstname' => 'firstname',
                    'lastname' => 'lastname',
                    'second_email' => 'trainer11@rishikantsri.tech',
                    'phone' => '1234567123',
                    'status' => 'Active',
                    'address_line1' => 'address line1',
                    'address_line2' => 'address line2',
                    'address_city' => 'address city',
                    'address_state' => 'address state',
                    'address_country' => 'address country',
                    'address_pincode' => '1111',
                    'qualification' => 'High School',
                    'lincense_number' => '3454',
                    'twitter' => 'twitter',
                    'linkedin' => 'linkedin',
                    'facebook' => 'facebook',
                    'skype' => 'skype',
                    'instagram' => 'instagram',
                    'image_path' => '/storage/default/trainer-1.jpg',
                     'gender' => 'Male',
                     'show_at_home' => '1',
                 ],
                 [
                    'user_id' => '3',
                    'firstname' => 'firstname',
                    'lastname' => 'lastname',
                    'second_email' => 'trainer21@rishikantsri.tech',
                    'phone' => '1234567123',
                    'status' => 'Active',
                    'address_line1' => 'address line1',
                    'address_line2' => 'address line2',
                    'address_city' => 'address city',
                    'address_state' => 'address state',
                    'address_country' => 'address country',
                    'address_pincode' => '1111',
                    'qualification' => 'High School',
                    'lincense_number' => '3454',
                    'twitter' => 'twitter',
                    'linkedin' => 'linkedin',
                    'facebook' => 'facebook',
                    'skype' => 'skype',
                    'instagram' => 'instagram',
                    'image_path' => '/storage/default/trainer-2.jpg',
                     'gender' => 'Male',
                     'show_at_home' => '1',
                 ],
                 [
                    'user_id' => '4',
                    'firstname' => 'firstname',
                    'lastname' => 'lastname',
                    'second_email' => 'trainer31@rishikantsri.tech',
                    'phone' => '1234567123',
                    'status' => 'Active',
                    'address_line1' => 'address line1',
                    'address_line2' => 'address line2',
                    'address_city' => 'address city',
                    'address_state' => 'address state',
                    'address_country' => 'address country',
                    'address_pincode' => '1111',
                    'qualification' => 'High School',
                    'lincense_number' => '3454',
                    'twitter' => 'twitter',
                    'linkedin' => 'linkedin',
                    'facebook' => 'facebook',
                    'skype' => 'skype',
                    'instagram' => 'instagram',
                    'image_path' => '/storage/default/trainer-3.jpg',
                     'gender' => 'Male',
                     'show_at_home' => '1',
                 ],

               
                
 
             ];
             UserDetails::insert($usersdetails);
             
         } else { echo "\e[31mTable is not empty, therefore NOT "; } 
 
       

           
                                                 
       
    }
}
