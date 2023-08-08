@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Project:' }}</h2>
        <!-- enctype="multipart/form-data" -->
        <form action="<?= route('projects.store') ?>" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.projects._form',['btn_submit' => 'Create'])

        </form>
@endsection
