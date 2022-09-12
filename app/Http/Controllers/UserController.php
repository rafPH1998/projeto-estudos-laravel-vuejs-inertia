<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function __construct
    (
        protected User $users
    ) {}

    public function index(Request $request)
    {

        $users = $this->users
                    ->searchUser(
                        search: $request->get('search') ?? ''
                    );

        return Inertia::render('Home', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return Inertia::render('Register');
    }

    public function show($id)
    {
        $user = $this->users
                    ->find($id);

        return Inertia::render('Show', ['user' => $user]);
    }

    public function store(StoreUser $request)
    {
        $this->users
            ->create($request->validated());
        return redirect()
                    ->route('home')
                    ->with('success', 'Usuario criado com sucesso!');
    }
}
