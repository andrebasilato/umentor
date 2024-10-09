@extends('admin.layouts.app')

@section('title', 'Criar Usuário')
@section('content')
    <h1>Novo Usuário</h1>
    <x-alert/>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

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