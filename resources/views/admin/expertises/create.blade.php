@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Expertise' }}</h2>
        <!-- enctype="multipart/form-data" -->
        <form action="<?= route('expertises.store') ?>" method="post">
            @csrf
            @include('admin.expertises._form',['btn_submit' => 'Create'])

        </form>
@endsection
