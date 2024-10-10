@extends('admin.layouts.app')

@section('title', 'Usuários')
@section('content')
<div class="flex justify-between items-center mt-2">
    <h1 class="text-2xl font-bold text-white">Usuários</h1>
    <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Novo Usuário</a>
</div>

<x-alert />

<div class="py-12">
    <div class="max-w-7xl">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="min-w-full bg-white dark:bg-gray-800 w-full">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-center">
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Nome</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Situação</th>
                            <th class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr class="border-b dark:border-gray-700 text-center">
                                <td class="px-6 py-3">{{ $user->id }}</td>
                                <td class="px-6 py-3">{{ $user->name }}</td>
                                <td class="px-6 py-3">{{ $user->email }}</td>
                                <td class="px-6 py-3">{{ $user->situation }}</td>
                                <td class="px-6 py-3 justify-center flex">
                                    <a href="{{ route('users.show', $user->id) }}" class="text-blue-500 hover:text-blue-700" title="Detalhes do Usuário"><i
                                            class="fas fa-info-circle px-2"></i></a>
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="text-yellow-500 hover:text-yellow-700" title="Editar Usuário"><i class="fas fa-edit px-2"></i></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-500 hover:text-red-700" title="Deletar Usuário">
                                            <i class="fas fa-trash-alt px-2"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">Nenhum usuário cadastrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{ $users->links() }}

@endsection