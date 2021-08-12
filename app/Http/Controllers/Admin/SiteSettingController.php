<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SiteSettingTop;
use App\Http\Controllers\Controller;
use Image;

class SiteSettingController extends Controller
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
        
        $sitesetting = SiteSettingTop::first();
        return view('backend.admin.sitesettings-top.show', compact('sitesetting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
       $sitesetting = SiteSettingTop::first();
       return view('backend.admin.sitesettings-top.edit', compact('sitesetting'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSettingTop $sitesetting)
    {
       
        $validated = $request->validate([
            'sitetitle'=> 'required|max:100',
            'heading' => 'required|max:255',
            'sub_heading' => 'required|max:150',
            'button_text' => 'required|max:50',
           
        ]); 

        $update = SiteSettingTop::find(1)->update(
            [
                'sitetitle' => $request->sitetitle,
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                'button_text' => $request->button_text,
               
            ]
        );

        $ss = SiteSettingTop::find(1);
           
        if($request->hasFile('background_image') && $request->file('background_image')->isValid()){
                $ss->clearMediaCollection('images');
                $ss->addMediaFromRequest('background_image')->toMediaCollection('images');

                $ss->background_image = $ss->getFirstMediaUrl('images');
                $ss->save(); 
                
        } 
       
        return redirect()->route('admin.sitesettings-top.show', $ss->id )->with('message','Content updated!');
       
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
