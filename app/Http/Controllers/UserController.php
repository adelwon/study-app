<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()->paginate(15);

        return view('index', compact('users'));
    }

    public function create(): View
    {
        return view('form');
    }

    public function store(Request $request): RedirectResponse
    {
        User::query()->create($request->only(['name', 'email']));

        return redirect()->route('users.index');
    }

    public function show(User $user): View
    {
        return view('show', compact('user'));
    }

    public function edit(User $user): View
    {
        return view('form', compact('user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $user->update($request->only(['name', 'email']));

        return redirect()->route('users.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
