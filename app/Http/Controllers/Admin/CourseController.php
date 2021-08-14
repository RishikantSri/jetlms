<?php
 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Course;  

class CourseController extends Controller
{
    
    public function index() 
    {
        $courses = Course::paginate(5);
        return view('backend.admin.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

   
    public function create()
    {
        return view('backend.admin.courses.create');
    }

    public function store(Request $request) 
    {
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

        return redirect()->route('admin.courses.index',$course->id)->with('message', 'Course created successfully.');
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('backend.admin.courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        
        return view('backend.admin.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [ 'string','max:255', ],
            'category' => ['string', 'max:100'],
            'description' => [ 'string', 'max:255'],
            'rating' => [ 'numeric','max:5'],
            'likes' => [ 'numeric', 'max:1000'],
            'published' => ['string'],
            "show_at_home" => 'boolean',
            'price' => ['numeric'],
           
        ]);

       

        $update = Course::find($id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'description' => $request->description ?? null,
            'published' => $request->published ?? 0,
            'price' => $request->price,
            'likes' => $request->likes,
            'rating' => $request->rating,
            'author' => $request->author,
            'show_at_home' => $request->input('show_at_home') ? true : false,
        ]);

        $course = Course::find($id);

      
        if($request->hasFile('course_image') && $request->file('course_image')->isValid()){
            $course->clearMediaCollection('images');
            $course->addMediaFromRequest('course_image')->toMediaCollection('images');

            $course->course_image = $course->getFirstMediaUrl('images');
            $course->save(); 
            
             } 
        return redirect()->route('admin.courses.show',$course->id)->with('message', 'Course Updated successfully.');
       
    } 

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('admin.courses.index')
        ->with('message','Course deleted successfully');
         
    }
}
