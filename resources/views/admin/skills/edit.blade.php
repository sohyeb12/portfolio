@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit skill: </h2>

        <form action="<?= route('users.skills', $skill->id) ?>" method="post">
            @csrf
            @method('put')
            @include('admin.skills._form',['btn_submit' => 'Update'])

        </form>
@endsection
