<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        return Inertia::render('Home', [
            'users' => $users
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function create()
    {
        return Inertia::render('Register');
    }

    public function store(StoreUser $request)
    {
        User::create($request->validated());
        return redirect()
                    ->route('home')
                    ->with('success', 'Usuario criado com sucesso!');
    }
}
