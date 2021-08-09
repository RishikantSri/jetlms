<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Laravel\Jetstream\Jetstream;





class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('backend.admin.users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
        return view('backend.admin.users.create');
           
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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:10'],
            'password' => 'required', 'string', 'confirmed',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'trainee_address' => $request->trainee_address ?? null,
            'trainee_licence_number' => $request->trainee_licence_number ?? null,
            'trainer_qualifications' => $request->trainer_qualifications ?? null,
        ]);

        UserDetails::create([
            'user_id' => $user->id,
            'gender' => $request->gender, 
            'image_path'=>'/storage/default/avatar1.png',   
            'show_at_home'=>'0',   

        ]);

      

        return redirect()->route('admin.users.show',$user->id)->with('message', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('backend.admin.users.show', compact('user'));
        
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
        return view('backend.admin.users.edit', compact('user'));
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
            "instagram" => 'max:255', "address_pincode" => 'max:10',
            "address_city" => 'max:255', "address_state" => 'max:255',
            "address_country" => 'max:255', "phone" => 'max:10',
            "show_at_home" => 'boolean',
            "about" => 'max:255',
           
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
                 'show_at_home' => $request->input('show_at_home') ? true : false,
                 'about' => $request->input('about'),
               
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
        return redirect()->route('admin.users.show',$id)->with('message', 'User Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        if($user->id==1){ // user is admin
            
            return redirect()->route('admin.users.index')
            ->with('message','Admin can not be deleted!');
            

        }
        else{
         $user->delete();
        return redirect()->route('admin.users.index')
        ->with('message','User deleted successfully');
        }    
       
    }
   
}
