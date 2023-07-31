<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DeatailController extends Controller
{
    public function index(){
        $details = Detail::all();
        return view('students.index',['students'=> $details]);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        {
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

}
}
