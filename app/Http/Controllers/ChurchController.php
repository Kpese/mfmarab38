<?php

namespace App\Http\Controllers;

use App\Models\bible_verse;
use App\Models\Church_contact;
use App\Models\Church_days_of_activity;
use App\Models\Church_head_of_department;
use App\Models\church_intro;
use App\Models\church_location;
use App\Models\Church_sermon;
use App\Models\Church_upcoming_event;
use Illuminate\Http\Request;

class ChurchController extends Controller
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

    return view('main.index', compact('bible_verse', 'church_contact', 'church_location',
    'church_sermon', 'church_upcoming_event', 'church_activity', 'church_department', 'church_intro'));
}

public function about(){

    return view('main.about');
}

public function contact(){
    $church_contact = Church_contact::all();
    $church_location = Church_location::all();
    return view('main.contacts', compact('church_contact', 'church_location'));
}

public function layout(){
    $church_contact = Church_contact::all();
    return view('layout.main_layout', compact('church_contact'));
}

public function give(){
    $church_contact = Church_contact::all();
    return view('main.give', compact('church_contact'));
}


public function department(){
    $church_contact = Church_contact::all();
    return view('main.department', compact('church_contact'));
}

public function history(){
    $church_contact = Church_contact::all();
    return view('main.history', compact('church_contact'));
}

public function mission(){
    $church_contact = Church_contact::all();
    return view('main.mission_vision', compact('church_contact'));
}

public function belief(){
    $church_contact = Church_contact::all();
    return view('main.our_belief', compact('church_contact'));
}

public function privacy_policy(){
    $church_contact = Church_contact::all();
    return view('main.privacy_policy', compact('church_contact'));
}


}