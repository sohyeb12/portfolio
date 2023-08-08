<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all()->toQuery()->paginate(5);
        return view('admin.educations.index',[
            'title' => 'Education Degrees List',
            'educations' => $educations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educations.create',[
            'education' => new Education(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'education_degree' => 'required|string',
            'degree_brief' => 'required|string|max:2500',
        ]);

        $education = new Education();
        $education->education_degree = $request->input('education_degree');
        $education->degree_brief = $request->input('degree_brief');
        $education->save();

        return redirect()->route('educations.index')->with('success' , 'Education Degree Added');
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
        return view('admin.educations.edit',[
            'education' => Education::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'education_degree' => 'required|string',
            'degree_brief' => 'required|string|max:2500',
        ]);

        $education = Education::findOrFail($id);
        $education->education_degree = $request->input('education_degree');
        $education->degree_brief = $request->input('degree_brief');
        $education->save();

        return redirect()->route('educations.index')->with('success' , 'Education Degree Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id' , '=' , $id)->delete();
        
        return redirect()->route('educations.index')->with('success' , 'Education Degree Deleted!');
    }
}
