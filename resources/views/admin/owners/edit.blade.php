@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit Owner: </h2>
        <!-- enctype="multipart/form-data" -->
        <form action="<?= route('owner.update', $owner->id) ?>" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.owners._form',['btn_submit' => 'Update'])

        </form>
@endsection
