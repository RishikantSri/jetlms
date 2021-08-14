<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
 
class CourseController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
      
        $courses = Course::where('author', '=', Auth::id())->paginate(5);
        return view('backend.trainer.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trainer.courses.create');
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
            'title' => ['required', 'string', 'max:255'],
            'slug' => [ 'string','max:255', ],
            'category' => ['string', 'max:100'],
            'description' => [ 'string', 'max:255'],
            'rating' => [ 'numeric','max:5'],
           
            'likes' => [ 'numeric', 'max:1000'],
            'start_date' => ['date', 'max:10'],
            'published' => ['string'],
           
        ]);
        
        $course = Course::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'description' => $request->description ?? null,
            'published' => $request->published ?? 0,
            'price' => $request->price ?? 0,
            'author' => Auth::id(),
            'show_at_home'=>'0', 
        ]);

       
           
        if($request->hasFile('course_image') && $request->file('course_image')->isValid()){
                $course->clearMediaCollection('images');
                $course->addMediaFromRequest('course_image')->toMediaCollection('images');

                $course->course_image = $course->getFirstMediaUrl('images');
                $course->save(); 
                
        } 

        return redirect()->route('trainer.courses.index',$course->id)->with('message', 'Course created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('backend.trainer.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::find($id);
        return view('backend.trainer.courses.edit', compact('course'));
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
        //
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [ 'string','max:255', ],
            'category' => ['string', 'max:100'],
            'description' => [ 'string', 'max:255'],
            'price' => ['numeric'],
           
        ]);

       

        $update = Course::find($id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'description' => $request->description ?? null,
            'price' => $request->price,
           
        ]);

        $course = Course::find($id);

      
        if($request->hasFile('course_image') && $request->file('course_image')->isValid()){
            $course->clearMediaCollection('images');
            $course->addMediaFromRequest('course_image')->toMediaCollection('images');

            $course->course_image = $course->getFirstMediaUrl('images');
            $course->save(); 
            
             } 
        return redirect()->route('trainer.courses.show',$course->id)->with('message', 'Course Updated successfully.');
       
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('trainer.courses.index')
        ->with('message','Course deleted successfully');
    }
}
