<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\SiteSettingFooter;
use App\Http\Controllers\Controller;



class SiteSettingFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
       
        $sitesetting = SiteSettingFooter::first();
        return view('backend.sitesettings-footer.index', compact('sitesetting'));
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
      
       $sitesetting = SiteSettingFooter::first();
       return view('backend.sitesettings-footer.edit', compact('sitesetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, SiteSettingFooter $sitesetting)
    {
        // if(count($request->all()) > 0) {
        //     dd('request all input not empty.');
        // } else {
        //     dd('request all input empty.');
        // }
       // dump($request->all());
        $update = SiteSettingFooter::find(1)->update(
            [
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'newsletter_message' => $request->newsletter_message,
                'copyright_message' => $request->copyright_message,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'inkedin' => $request->inkedin,
                'skype' => $request->skype,
            ]
            );
       return redirect()->route('admin.sitesettings-footer.index')->with('message','Content updated!');
       
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
