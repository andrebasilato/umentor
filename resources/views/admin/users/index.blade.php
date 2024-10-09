@extends('admin.layouts.app')

@section('title', 'Usuários')
@section('content')
<h1>Usuários</h1>

<a href="{{ route('users.create') }}">Novo Usuário</a>

<x-alert/>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->situation }}</td>
                <td>
                    <a href="#">Info</a>
                    <a href=" {{ route('users.edit', $user->id) }} ">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum usuário cadastrado</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $users->links() }}

@endsection