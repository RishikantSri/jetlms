<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:10'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => $input['role_id'],
           
        ]);
        UserDetails::create([
            'user_id' => $user->id,
            'gender' => $input['gender'], 
            'image_path'=>'/storage/default/avatar1.png',   

        ]);

        //  Email :sending on registration
 
        // email data
            $email_data = array(
                'name' => $input['name'],
                'email' => $input['email'],
            );

            // send email with the template
            Mail::send('backend.emails.welcome', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject('Welcome to LMS')
                    ->from('info@rishikantsri.tech', 'Jet LMS');
            });

        return $user;
    }
}
