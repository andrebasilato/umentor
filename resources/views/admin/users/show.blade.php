@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')
@section('content')
<div class="flex justify-between items-center mt-2 mb-5">
    <h1 class="text-2xl font-bold text-white">Detalhes do Usuário</h1>
</div>

<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->name }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->email }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Situação:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->situation ? 'Ativo' : 'Inativo' }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">CEP:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->cep }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cidade:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->city }}</p>
    </div>

    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Data de Admissão:</label>
        <p class="mt-1 text-sm text-gray-900 dark:text-gray-200">{{ $user->admission_at }}</p>
    </div>
</div>

<div class="flex space-x-2 mt-4">
    <a href="{{ route('users.edit', $user->id) }}"
        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
        Editar
    </a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg ml-4">
            Excluir
        </button>
    </form>
</div>
@endsection