<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function first(){
       
        return view('school.home');
    }
    public function index(){
        $students = student::all();
        return view('school.index',['school'=> $students]);
    }
    public function create(){
        return view('school.create');
        
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
        'level'=> 'required']);
        $newStudent = Student::create($data);
        return redirect(route('school.index'))->with('success',('Data added successfully'));
        

    }
    public function edit(Student $school){
        return view('school.editable',['school'=>$school]);
}
public function update(Student $school, Request $request){
    $data = $request->validate([
        'name'=> 'required',
    'level'=> 'required']);
    $school->update($data);
    return redirect(route('school.index'))->with('success',('updated successfully'));
    }
    public function destroy(Student $school){
        $school -> delete();
        return redirect(route('school.index'))->with('success','Data deleted successfully');

    }
}