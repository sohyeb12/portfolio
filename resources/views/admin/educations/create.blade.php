@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Education Degree' }}</h2>

        <form action="<?= route('educations.store') ?>" method="post">
            @csrf
            @include('admin.educations._form',['btn_submit' => 'Create'])

        </form>
@endsection
