@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('expertises.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>
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
            <th>Breif</th>
            <th>Edit Expertise</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($expertises as $expertise)
        <tr>
            <td>{{ $expertise->id }}</td>
            <td>{{ $expertise->name }}</td>
            <td>{{ $expertise->brief }}</td>
            
            <td><a href="{{ route('expertises.edit', $expertise->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit Expertise</a> </td>
            <td>
                <form action="{{ route('expertises.destroy', $expertise->id) }}" method="post">
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
    {{ $expertises->links() }}
</div>
@endsection