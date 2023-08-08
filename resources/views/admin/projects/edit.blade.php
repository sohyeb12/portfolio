@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit User: </h2>

        <form action="<?= route('projects.update', $project->id) ?>" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.projects._form',['btn_submit' => 'Update'])

        </form>
@endsection
