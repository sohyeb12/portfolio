@extends('layouts.admin')

@section('content')
<h2 class="mb-4 fs-3">{{ 'New User' }}</h2>
<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('admin.users._form',['btn_submit' => 'Create'])
</form>

@endsection('content')