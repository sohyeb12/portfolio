@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Work' }}</h2>
        <!-- enctype="multipart/form-data" -->
        <form action="<?= route('works.store') ?>" method="post">
            @csrf
            @include('admin.works._form',['btn_submit' => 'Create'])

        </form>
@endsection
