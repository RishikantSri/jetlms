<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\SiteSettingTop;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $user = User::find($id);
        $userdetails = User::find($id)->UserDetails;
        return view('backend.trainer.myprofile.show', compact('user'));
      
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $userdetails = User::find($id)->UserDetails;
        return view('backend.trainer.myprofile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'firstname'=> 'max:100', 'lastname' => 'max:255',
            'qualification' => 'max:150', "second_email" => 'max:150',
            "address_line1" => 'max:255', "address_line2" => 'max:255',
             "twitter" => 'max:255', "linkedin" => 'max:255',
            "facebook" => 'max:255', "skype" => 'max:255',
            "instagram" => 'max:255', "address_pincode" => 'numeric',
            "address_city" => 'max:255', "address_state" => 'max:255',
            "address_country" => 'max:255', "phone" => 'numeric',
           
        ]); 
   
         $update = UserDetails::find($id)->update(
             [
                 'firstname' => $request->firstname,'lastname' => $request->lastname,
                 'qualification' => $request->qualification, 'second_email' => $request->second_email,
                 'address_line1' => $request->address_line1, 'address_line2' => $request->address_line2,
                 'twitter' => $request->twitter,'linkedin' => $request->linkedin,
                 'facebook' => $request->facebook, 'skype' => $request->skype,
                 'instagram' => $request->instagram, 'address_pincode' => $request->address_pincode,
                 'address_city' => $request->address_city, 'address_state' => $request->address_state,
                 'address_country' => $request->address_country, 'address_state' => $request->address_state,
                 'address_country' => $request->address_country, 'phone' => $request->phone,
               
             ]
         );

         $ss = UserDetails::find($id);
           
         if($request->hasFile('image_path') && $request->file('image_path')->isValid()){
                 $ss->clearMediaCollection('images');
                 $ss->addMediaFromRequest('image_path')->toMediaCollection('images');

                 // set to UserDetails Table-> image is uploaded
                 $ss->image_path = $ss->getFirstMediaUrl('images');
                 $ss->save(); 
                
         }
    
        return redirect()->route('trainer.myprofile.show', $id )->with('message','Content updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
