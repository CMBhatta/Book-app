<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Student;

class DeatailController extends Controller
{
    public function index(){
        $details = Detail::all();
        return view('students.index',['students'=> $details]);
    }
    public function create(){
        $classes = Student::all();
        return view('students.create',compact('classes'));
    }
    public function store(Request $request){
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'class' => 'required',
                'roll' => 'required',
                'gender' => 'required|in:male,female,other',
                'address' => 'required|string|max:255',
                'description' => 'nullable',
            ]);
            $newDetail = Detail::create($data);
        return redirect(route('students.index'));
    }
    public function edit(Detail $details){
        return view('students.edit',['details'=> $details]);
    }
    public function update(Detail $details, Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required',
            'roll' => 'required',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:255',
            'description' => 'nullable',
        ]);
        $details->update($data);
        return redirect(route('students.index'))->with('success','Data updated successfully');
    }
    public function destroy(Detail $details){
        $details-> delete();
        return redirect(route('students.index'))->with('success','Data deletd successfully');
    }
}

