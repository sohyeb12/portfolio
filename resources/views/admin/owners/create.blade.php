@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Owner' }}</h2>
        <!-- enctype="multipart/form-data" -->
        <form action="<?= route('owner.store') ?>" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.owners._form',['btn_submit' => 'Create'])

        </form>
@endsection
