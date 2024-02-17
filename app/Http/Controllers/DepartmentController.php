<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church_head_of_department;

class DepartmentController extends Controller
{
    public function department(){
        $church_department= Church_head_of_department::orderBy("created_at", "DESC")->get();
        return view('admin.departments.department', compact('church_department'));
    }

    public function department_show(){
        return view('admin.departments.department_create');
     }

    public function create_department(){
        $validate = request()->validate([
            'quote' => 'string|required|min:5|max:1000',
            'name' => 'string|required|min:2|max:1000',
            'office' => 'string|required|min:2|max:1000',
            'image' => 'image',
        ]);

        $image = request()->file('image');
        $filename = time() . '_department_' . $image->getClientOriginalName();
        $image->move(public_path('assets/images/department'), $filename);
        $department = new Church_head_of_department();

        $department->photo = $filename;
        $department->quotes = $validate['quote'];
        $department->name = $validate['name'];
        $department->office = $validate['office'];
        $department->save();

        return redirect()->route('admin.department')->with('success', 'department created successfully');
    }



    public function destroy_depart($id)
    {
        $sermon = Church_head_of_department::findOrFail($id);
        $sermon->delete();

        return back()->with('success', "Department deleted Successfully");
    }



}
