<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WoeksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.works.index',[
            'title' => 'Works List',
            'works' => Work::all()->toQuery()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.works.create',[
            'work' => new Work(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:150',
            'date' => 'required|string',
            'work_brief' => 'required|string|max:500'
        ]);

        $work = new Work();
        $work->title = $request->input('title');
        $work->date = $request->input('date');
        $work->work_brief = $request->input('work_brief');
        $work->save();

        return redirect()->route('works.index')->with('success' , 'New Work Added!');
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
        return view('admin.works.edit',[
            'work' => Work::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:150',
            'date' => 'required|string',
            'work_brief' => 'required|string|max:500'
        ]);

        $work = Work::findOrFail($id);
        $work->title = $request->input('title');
        $work->date = $request->input('date');
        $work->work_brief = $request->input('work_brief');
        $work->save();

        return redirect()->route('works.index')->with('success' , 'New Work Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WorK::where('id' , '=' , $id)->delete();

        return redirect()->route('works.index')->with('success' , 'New Work Deleted!');
    }
}
