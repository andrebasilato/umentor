<x-alert />

@csrf
<div class="mb-4">
    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
    <input type="text" name="name" id="name" value="{{ $user->name ?? old('name') }}" placeholder="Exemplo: Nina Ganyus"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 focus:ring-blue-500 focus:border-blue-500">
</div>

<div class="mb-4">
    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email ?? old('email') }}"
        placeholder="Exemplo: seunome@umentor.com.br"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 focus:ring-blue-500 focus:border-blue-500">
</div>

<div class="mb-4">
    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Senha</label>
    <input type="password" name="password" id="password" placeholder="*********"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 focus:ring-blue-500 focus:border-blue-500">
</div>

<div class="mb-4">
    <label for="situation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Situação</label>
    <select name="situation" id="situation"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 focus:ring-blue-500 focus:border-blue-500">
        <option value="1" {{ (isset($user) && $user->situation == 1) ? 'selected' : '' }}>Ativo</option>
        <option value="0" {{ (isset($user) && $user->situation == 0) ? 'selected' : '' }}>Inativo</option>
    </select>
</div>

<div class="mb-4">
    <label for="admission_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Data de
        admissão</label>
    <input type="date" name="admission_at" id="admission_at" value="{{ $user->admission_at ?? old('admission_at') }}"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:text-gray-300 focus:ring-blue-500 focus:border-blue-500">
</div>

<button type="submit"
    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Salvar</button>