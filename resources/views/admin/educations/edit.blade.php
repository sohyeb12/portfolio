@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit Education Degree: </h2>

        <form action="<?= route('educations.update', $education->id) ?>" method="post">
            @csrf
            @method('put')
            @include('admin.educations._form',['btn_submit' => 'Update'])

        </form>
@endsection
