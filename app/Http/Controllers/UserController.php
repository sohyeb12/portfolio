<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();
        return view('admin.users.index',[
            'title' => 'Users List',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::first();
        if(! isset($user)){
            return view('admin.users.create', [
                'user' => new User(),
            ]);
        }

        else{
            return redirect()->route('users.index')->with('success', "You Can't added Another User in This Site!");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->password);
        $user->save();

        Owner::create([
            'name' => $request->input("name"),
            'email' => $request->input("email"),
        ]); 

        return redirect()->route('users.index')->with('success', "User ({$user->name}) Created");
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
        return view('admin.users.edit', [
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->password);
        $user->save();

        $owner = Owner::first();
        $owner->name = $request->input("name");
        $owner->email = $request->input("email");
        $owner->save();

        return redirect()->route('users.index')->with('success', "User ({$user->name}) Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id' , '=' , $id)->delete();

        return redirect()->route('users.index')->with('success', "User Deleted Successfully!");
    }
}
