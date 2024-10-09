<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function edit(int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, int $id)
    {
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado!');
        }

        $data = $request->only('name', 'email', 'situation', 'admission_at');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com Sucesso!');
    }

    public function destroy(int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        if ($user->id === auth()->user()->id) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Você não pode deletar a si mesmo!');
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário deletado com Sucesso!');
    }
}
