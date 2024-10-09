@extends ('admin.layouts.app')

@section('title', 'Editar Usuário')
@section('content')
<h1>Editar Usuário {{ $user->name }}</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @include('admin.users._partials.form')
</form>

@endsection