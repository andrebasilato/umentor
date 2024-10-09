@extends('admin.layouts.app')

@section('title', 'Criar Usuário')
@section('content')
<div class="flex justify-between items-center mt-2">
    <h1 class="text-2xl font-bold text-white">Criar Usuário</h1>
</div>
<form action="{{ route('users.store') }}" method="POST">
    @include('admin.users._partials.form')
</form>
@endsection