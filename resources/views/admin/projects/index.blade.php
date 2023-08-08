@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('projects.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>

    </div>
</header>


@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Project Brief</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->project_brief }}</td>
            <td>
                <a href="{{ $project->image_url }}">
                    <img src="{{ $project->image_url }}" alt="" width="150" height="150">
                </a>
            </td>


            <td><a href="{{ route('projects.edit', $project->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit User Info</a> </td>
            <td>
                <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn -sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection