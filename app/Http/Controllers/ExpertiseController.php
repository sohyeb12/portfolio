<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expertises = Expertise::all()->toQuery()->paginate(5);
        $title = "Expertises List";

        return view('admin.expertises.index', [
            'expertises' => $expertises,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.expertises.create', [
            'icons' => Expertise::icon_types(),
            'expertise' => new Expertise(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:255',
            'brief' => 'required|nullable|min:10|max:655',
            'icon' => 'required|in:icon-bulb,icon-data,icon-phone3',
        ]);

        $expertise = new Expertise();
        $expertise->name = $request->input('name');
        $expertise->brief = $request->input('brief');
        $expertise->icon = $request->input('icon');
        $expertise->save();

        return redirect()->route('expertises.index')->with('success', 'Expertise Added successfully!');
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
        $expertise = Expertise::findOrFail($id);
        return view('admin.expertises.edit', [
            'icons' => Expertise::icon_types(),
            "expertise" => $expertise,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:4|max:255',
            'brief' => 'required|nullable|min:10|max:655',
            'icon' => 'required|in:icon-bulb,icon-data,icon-phone3',
        ]);

        $expertise = Expertise::findOrFail($id);
        $expertise->name = $request->input('name');
        $expertise->brief = $request->input('brief');
        $expertise->icon = $request->input('icon');
        $expertise->save();

        return redirect()->route('expertises.index')->with('success', 'Expertise Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Expertise::where('id','=',$id)->delete(); 

        return redirect()->route('expertises.index')->with('success' , 'Expertise Deleted Successfully!');
    }
}
