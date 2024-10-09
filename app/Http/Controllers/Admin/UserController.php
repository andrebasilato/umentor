<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
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

    public function update(int $id)
    {
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado!');
        }
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com Sucesso!');
    }
}
