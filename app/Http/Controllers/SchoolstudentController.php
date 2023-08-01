<?php

namespace App\Http\Controllers;
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
        return view('schoolstudent.index',compact('schoolstudents'));
    }
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schoolstudent.create');
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
        $schoolstudents = Schoolstudent::findOrFail($id);
        return view('schoolstudent.edit',compact('schoolstudents'));
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
    
}


