<?php

namespace App\Http\Controllers;

use App\Models\Schoolclass;
use Illuminate\Http\Request;
use App\Models\Schoolstudent;

class SchoolstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $schoolstudents = Schoolstudent::all();
        $totalstudent = count($schoolstudents);
        $totalusers = Schoolclass::count();
        return view('schoolstudent.index',compact('schoolstudents','totalstudent','totalusers'));
    }
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        // to call class data
        $schoolclasses = Schoolclass::all();
        $schoolstudents = Schoolstudent::all();
        $totalstudent = count($schoolstudents);
        $totalusers = Schoolclass::count();
        return view('schoolstudent.create',compact('schoolclasses','schoolstudents','totalstudent','totalusers'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
                'class' => '',
                'roll' => 'required',
                'gender' => '',
                'address' => 'required|string|max:255',
                'description' => 'nullable',
        ]);

        Schoolstudent::create(request()->only(['name','class','roll','gender','address','description']));
        session()->flash('success_message','New class has been addedd successfully!.');
        return redirect('schoolstudents');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       // Fetch the school student record for the given ID
    $schoolstudents = SchoolStudent::findOrFail($id);

    // Fetch the school classes for the select dropdown
    $schoolclasses = Schoolclass::all();
    $totalusers = count($schoolclasses);
    $totalstudent = Schoolstudent::count();

    return view('schoolstudent.edit', compact('schoolstudents', 'schoolclasses', 'totalusers', 'totalstudent'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'name' => 'required|string|max:255',
                'class' => '',
                'roll' => 'required',
                'gender' => '',
                'address' => 'required|string|max:255',
                'description' => 'nullable',
        ]);
        
        $schoolstudents = Schoolstudent::findOrFail($id);

        $schoolstudents->name = request('name');
        $schoolstudents->class = request('class');
        $schoolstudents->roll = request('roll');
        $schoolstudents->gender = request('gender');
        $schoolstudents->address = request('address');
        $schoolstudents->description = request('description');
        $schoolstudents->save();

        session()->flash('success_message','One class has been updated successfully!.');
        return redirect('schoolstudents');

}
/**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Schoolstudent::findOrFail($id)->delete();
        Schoolclass::findOrFail($id)->delete();
        session()->flash('success_message','One class has been deleted successfully!.');
        return redirect('schoolstudents');

    }
    
}


