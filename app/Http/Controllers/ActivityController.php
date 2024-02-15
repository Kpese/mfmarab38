<?php

namespace App\Http\Controllers;
use App\Models\Church_days_of_activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function activity(){
        $church_activity = Church_days_of_activity::all();
            return view('admin.activity.activity', compact('church_activity'));
        }

        public function activity_show(){
            return view('admin.activity.create_activity');
        }

        public function create_activity(){
            $validated = request()->validate([
                'days' => 'string|required|min:5|max:1000',
                'program' => 'string|required|min:5|max:1000',
                'time' => 'string|required|min:5|max:1000',
            ]);

            $activity = new Church_days_of_activity();

            $activity->days = $validated['days'];
            $activity->program = $validated['program'];
            $activity->time = $validated['time'];
            $activity->save();

            return redirect()->route('admin.activity')->with('success', 'days of activity created successfully');
        }

        public function destroy_activity($id){
            $activity = Church_days_of_activity::findOrFail($id);
            $activity->delete();

            return back()->with('success', 'Activity deleted successfully');
        }


}