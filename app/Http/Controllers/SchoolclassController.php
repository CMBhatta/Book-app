<?php

namespace App\Http\Controllers;

use App\Models\Schoolclass;
use App\Models\Schoolstudent;
use Illuminate\Http\Request;

class SchoolclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolclasses = Schoolclass::all();
        $totalusers = count($schoolclasses);
        $totalstudent = Schoolstudent::count();
        return view('schoolclass.index',compact('schoolclasses', 'totalusers','totalstudent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schoolclasses = Schoolclass::all();
        $totalusers = count($schoolclasses);
        $totalstudent = Schoolstudent::count();
        return view('schoolclass.create',compact('schoolclasses', 'totalusers','totalstudent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'level'=>'required|numeric'
        ]);

        Schoolclass::create(request()->only(['name','level']));
        session()->flash('success_message','New class has been addedd successfully!.');
        return redirect('schoolclass');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $schoolclasses = Schoolclass::all();
        $totalusers = count($schoolclasses);
        $totalstudent = Schoolstudent::count();
        $schoolclass = Schoolclass::findOrFail($id);
        return view('schoolclass.edit',compact('schoolclass', 'schoolclasses', 'totalusers','totalstudent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'name'=>'required',
            'level'=>'required|numeric'
        ]);
        
        $schoolclass = Schoolclass::findOrFail($id);

        $schoolclass->name = request('name');
        $schoolclass->level = request('level');
        $schoolclass->save();

        session()->flash('success_message','One class has been updated successfully!.');
        return redirect('schoolclass');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Schoolclass::findOrFail($id)->delete();
        session()->flash('success_message','One class has been deleted successfully!.');
        return redirect('schoolclass');

    }
}
