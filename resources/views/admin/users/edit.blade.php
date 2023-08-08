@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit User: </h2>

        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('put')
            @include('admin.users._form',['btn_submit' => 'Update'])

        </form>
@endsection