<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index',[
            'title' => 'Projects List',
            'projects' => Project::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create',[
            'project' => new Project(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $project = Project::create($data);

        return redirect()->route('projects.index')->with('success' , "Project ({ $project->project_name }) Added!");
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
        return view('admin.projects.edit',[
            'project' => Project::findOrFail($id), 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $old_image = $project->image;
        $project->update($data);

        if ($old_image && $old_image != $project->image) {
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('projects.index')->with('success' , 'Project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::where('id', '=' , $id)->delete();

        return redirect()->route('projects.index')->with('success' , 'Project Deleted!');
    }
}
