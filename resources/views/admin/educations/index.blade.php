@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('educations.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>

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
            <th>Education Degree</th>
            <th>Degree Brief</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach($educations as $education)
        <tr>
            <td>{{ $education->id }}</td>
            <td>{{ $education->education_degree }}</td>
            <td>{{ $education->degree_brief }}</td>

            <td><a href="{{ route('educations.edit', $education->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit Degree Info</a> </td>
            <td>
                <form action="{{ route('educations.destroy', $education->id) }}" method="post">
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
    {{ $educations->links() }}
</div>

@endsection