<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

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
                        <a href="-">Editar</a>
                        <a href="-">Excluir</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Nenhum usuário cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>