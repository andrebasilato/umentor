@extends ('admin.layouts.app')

@section('title', 'Editar Usuário')
@section('content')
<h1>Editar Usuário {{ $user->name }}</h1>

<x-alert/>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}">

    <label for="password">Senha</label>
    <input type="password" name="password" id="password">

    <label for="situation">Situação</label>
    <select name="situation" id="situation">
        <option value=1>Ativo</option>
        <option value=0>Inativo</option>
    </select>

    <label for="admission_at">Data de admissão</label>
    <input type="date" name="admission_at" id="admission_at">

    <button type="submit">Salvar</button>
</form>

@endsection