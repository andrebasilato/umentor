@extends ('admin.layouts.app')

@section('title', 'Editar Usuário')
@section('content')
<div class="flex justify-between items-center mt-2 mb-5">
    <h1 class="text-2xl font-bold text-white">Editar Usuário {{ $user->name }}</h1>
</div>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @include('admin.users._partials.form')
</form>

@endsection