@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('skills.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>

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
            <th>Name</th>
            <th>Percentage</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($skills as $skill)
        <tr>
            <td>{{ $skill->id }}</td>
            <td>{{ $skill->name }}</td>
            <td>{{ $skill->percentage }}</td>


            <td><a href="{{ route('skills.edit', $skill->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit Skill Info</a> </td>
            <td>
                <form action="{{ route('skills.destroy', $skill->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn -sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    {{ $skills->links() }}
</div>

@endsection