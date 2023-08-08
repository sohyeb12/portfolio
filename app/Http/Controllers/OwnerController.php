<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Intl\Countries;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owner = Owner::first();
        return view('admin.owners.index', [
            'owner' => $owner,
            'title' => 'Owner Info',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owner = Owner::first();
        $countries = Countries::getNames('en');
        if (! isset($owner)) {
            return view('admin.owners.create', [
                'owner' => $owner,
                'countries' => $countries,
            ]);
        }
        
        else{
            return redirect()->route('owner.index')->with('success','You Cant create Another Owner');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OwnerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $owner = Owner::create($data);

        return redirect()->route('owner.index')->with('success', "Owner ({$owner->name}) Created");
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
        $owner = owner::findOrFail($id);
        $countries = Countries::getNames('en');
        return view('admin.owners.edit',[
            'owner' => $owner,
            'countries' => $countries,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OwnerRequest $request, Owner $owner)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $old_image = $owner->image;
        $owner->update($data);

        if ($old_image && $old_image != $owner->image) {
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('owner.index')->with('success','You Updated Owner Information.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        
        return redirect()->route('owner.index')->with('Owner ({$owner->name}) Deleted');
    }
}
