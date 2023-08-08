@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit Expertise: </h2>

        <form action="<?= route('expertises.update', $expertise->id) ?>" method="post">
            @csrf
            @method('put')
            @include('admin.expertises._form',['btn_submit' => 'Update'])

        </form>
@endsection
