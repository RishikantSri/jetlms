<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SiteSettingTop;
use App\Http\Controllers\Controller;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $sitesetting = SiteSettingTop::first();
        return view('backend.sitesettings-top.index', compact('sitesetting'));
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
        //
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
       return view('backend.sitesettings-top.edit', compact('sitesetting'));
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
        $update = SiteSettingTop::find(1)->update(
            [
                'sitetitle' => $request->sitetitle,
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                'button_text' => $request->button_text,
            ]
            );
       return redirect()->route('admin.sitesettings-top.index')->with('message','Content updated!');
       
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
