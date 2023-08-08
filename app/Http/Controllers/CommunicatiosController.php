<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommuncationRequest;
use App\Models\Communication;
use App\Models\User;
use App\Notifications\NewCommunicationNotification;
use Illuminate\Http\Request;

class CommunicatiosController extends Controller
{
    public function store(CommuncationRequest $request)
    {

        $data = $request->validated();

        $communication = Communication::create($data);

        $user = User::first();
        $user->notify( new NewCommunicationNotification($communication));

        return view('success');
    }

    public function show(string $id){
        //
    }
}
