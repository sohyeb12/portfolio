@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Skill' }}</h2>

        <form action="<?= route('skills.store') ?>" method="post">
            @csrf
            @include('admin.skills._form',['btn_submit' => 'Create'])
        </form>
@endsection
