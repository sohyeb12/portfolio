<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Skills List';
        $skills = Skill::all()->toQuery()->paginate(5);

        return view('admin.skills.index',[
            'title' => $title,
            'skills' => $skills,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create',[
            'skill' => new Skill(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'percentage' => 'required|numeric|min:0|max:100',
        ]);

        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->percentage = $request->input('percentage');
        $skill->save();

        return redirect()->route('skills.index')->with('success','New Skill Added!');
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
        return view('admin.skills.edit',[
            'skill' => Skill::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'percentage' => 'required|numeric|min:0|max:100',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->input('name');
        $skill->percentage = $request->input('percentage');
        $skill->save();

        return redirect()->route('skills.index')->with('success','New Skill Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id' , '=' , $id)->delete();

        return redirect()->route('skills.index')->with('success','Skill Deleted!');
    }
}
