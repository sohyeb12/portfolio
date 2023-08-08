@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('works.create') ?>" class="btn btn-sm btn-primary">+ Create User</a>

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
            <th>Title</th>
            <th>Date</th>
            <th>Work Brief</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($works as $work)
        <tr>
            <td>{{ $work->id }}</td>
            <td>{{ $work->title }}</td>
            <td>{{ $work->date }}</td>
            <td>{{ $work->work_brief }}</td>


            <td><a href="{{ route('works.edit', $work->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit Work Info</a> </td>
            <td>
                <form action="{{ route('works.destroy', $work->id) }}" method="post">
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
    {{ $works->links() }}
</div>

@endsection