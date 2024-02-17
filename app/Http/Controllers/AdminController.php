<?php

namespace App\Http\Controllers;

use App\Models\Bible_verse;
use App\Models\Church_contact;
use App\Models\Church_days_of_activity;
use App\Models\Church_head_of_department;
use App\Models\Church_intro;
use App\Models\Church_location;
use App\Models\Church_sermon;
use App\Models\Church_upcoming_event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $bible_verse = Bible_verse::orderBy("created_at", "DESC")->get();
        $church_contact = Church_contact::orderBy("created_at", "DESC")->get();
        $church_activity = Church_days_of_activity::orderBy("created_at", "DESC")->get();
        $church_department = Church_head_of_department::orderBy("created_at", "DESC")->get();
        $church_intro = Church_intro::orderBy("created_at", "DESC")->get();
        $church_location = Church_location::orderBy("created_at", "DESC")->get();
        $church_sermon = Church_sermon::orderBy("created_at", "DESC")->paginate(3);
        $church_upcoming_event = Church_upcoming_event::orderBy("created_at", "DESC")->get();

        return view('admin.dashboard', compact('bible_verse', 'church_contact', 'church_location',
        'church_sermon', 'church_upcoming_event', 'church_activity', 'church_department', 'church_intro'));
    }


    public function location(){
        $location =  Church_location::orderBy("created_at", "DESC")->get();
        return view('admin.location', compact('location'));
    }

    public function handle_location(){
      $validate = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'images' => 'image',
        ]);

            $image = request()->file('images');
            $filename = time() . '_church_location_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/church_location'), $filename);

        Church_location::create([
            'name' => $validate['name'],
            'address' => $validate['address'],
            'phone' => $validate['phone'],
            'images' => $filename,
        ]);

        return back()->with('success', 'church location created successfully');
    }

    public function destroy_location($id)
    {
        $location =  Church_location::findOrFail($id);
        $location->delete();

        return back()->with('success', "location deleted Successfully");
    }




    // public function contact(){
    //     return view('admin.contact');
    // }

    // *********   BIBLE VERSE  **************************************
    public function bible_verse(){
        $bible = Bible_verse::orderBy('created_at', 'DESC')->get();
        return view('admin.bible_verse', compact('bible'));
    }

    public function handle_bible_verse(){
        $validate = request()->validate([
            'text' => 'string|required|min:5|max:1000',
            'verse' => 'string|required|min:5|max:1000',
        ]);

        $bible = new Bible_verse();

        $bible->bible_texts = $validate['text'];
        $bible->bible_verses = $validate['verse'];
        $bible->save();

        return back()->with('success', 'bible words is saved successfully');
    }

    public function destroy_verse($id)
    {
        $sermon = Bible_verse::findOrFail($id);
        $sermon->delete();

        return back()->with('success', "Bible Verse deleted Successfully");
    }

// ***********************************************************************


// >>>>>>>>>>>>>>>>>>>>>>>>  CHURCH EVENTS    >>>>>>>>>>>>>>>>>>>>>>>>
    public function event(){
        $event = Church_upcoming_event::orderBy('created_at', 'DESC')->get();
        return view('admin.event', compact('event'));
    }

    public function handle_event(){
        $validated =  request()->validate([
               'id' => 'required',
               'image' => 'image',
           ]);

           $id = $validated['id'];
           unset($validated['id']);

           if(request('image')){
               $image = request()->file('image');
               $filename = time() . '_events_' . $image->getClientOriginalName();
               $image->move(public_path('assets/images/church_event'), $filename);
               $validated['image'] = $filename;
           }

           Church_upcoming_event::where('id', $id)->update($validated);

           return back()->with('success', 'events updated successfully');
       }

       public function destroy_event($id)
       {
    $sermon = Church_upcoming_event::findOrFail($id);
    $sermon->delete();

    return back()->with('success', "Church Intro is deleted Successfully");
     }

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


// >>>>>>>>>>>>>>>>>>>>>>> CHURCH INTRODUCTION >>>>>>>>>>>>>>>>>>>>>>>>>

    public function intro(){
        $intro = Church_intro::orderBy('created_at', 'DESC')->get();
        return view('admin.intro', compact('intro'));
    }

    public function handle_intro(){
       request()->validate([
        'image' => 'image',
       ]);

        $image = request()->file('image');

        $filename = time() . '_intro_' . $image->getClientOriginalName();

        $image->move(public_path('assets/images/intro'), $filename);

        $intro = new Church_intro();

        $intro->background_image = $filename;
        $intro->save();

    return back()->with('success', 'background image updated successfully');
   }

   public function destroy_intro($id)
   {
       $sermon = Church_intro::findOrFail($id);
       $sermon->delete();

       return back()->with('success', "Church Intro is deleted Successfully");
   }
}
