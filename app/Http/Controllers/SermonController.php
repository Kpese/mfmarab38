<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church_sermon;

class SermonController extends Controller
{

    public function destroy_sermon($id)
    {
        $sermon = Church_sermon::findOrFail($id);
        $sermon->delete();

        return redirect()->route('admin.sermon')->with('success', "sermon deleted Successfully");
    }


    public function sermons_create(){
        return view('admin.sermons_create');
    }

    public function sermon(){
        $church_sermon = Church_sermon::orderBy("created_at", "DESC")->get();
        return view('admin.sermon', compact('church_sermon'));
    }


    public function handle_sermon(){
        $validate = request()->validate([
            'topic' => 'required',
            'preach' => 'required',
            'audio' => 'file',
        ]);
            $audio = request()->file('audio');
            $filename = time() . '_sermon_' . $audio->getClientOriginalName();
            $audio->move(public_path('assets/audio'), $filename);

        $audio = new Church_sermon();
        $audio->topic = $validate['topic'];
        $audio->preached_by = $validate['preach'];
        $audio->audio = $filename;
        $audio->save();

        return redirect()->route('admin.sermon')->with('success', 'church Sermon created successfully');
    }

}
