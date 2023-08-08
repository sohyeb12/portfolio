@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('owner.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>
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
            <th>Email</th>
            <th>Brief</th>
            <th>Work</th>
            <th>State</th>
            <th>Image Owner</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $owner->id ?? '' }}</td>
            <td>{{ $owner->name ?? ''  }}</td>
            <td>{{ $owner->email ?? ''  }}</td>
            <td>{{ $owner->Brief ?? '' }}</td>
            <td>{{ $owner->work ?? '' }}</td>
            <td>{{ $owner->state ?? ''  }}</td>
            <td>
                <a href="{{ $owner->image_url }}">
                    <img src="{{ $owner->image_url }}" alt=""  width="100" height="100">
                </a>
            </td>


            <td><a href="{{ route('owner.edit', $owner->id ?? '') }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit User Info</a> </td>
            <td>
                <form action="{{ route('owner.destroy', $owner->id ?? '') }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn -sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>

        </tr>

    </tbody>
</table>



@endsection