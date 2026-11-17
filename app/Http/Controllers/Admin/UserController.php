<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private function users(): array
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Jonas',
                'surname' => 'Jonaitis',
                'email' => 'jonas@example.com',
            ],
            2 => [
                'id' => 2,
                'name' => 'Petras',
                'surname' => 'Petraitis',
                'email' => 'petras@example.com',
            ],
            3 => [
                'id' => 3,
                'name' => 'Ona',
                'surname' => 'Onaitė',
                'email' => 'ona@example.com',
            ],
        ];
    }

    public function index()
    {
        return view('admin.users.index', [
            'users' => $this->users(),
        ]);
    }

    public function edit(int $id)
    {
        $user = $this->users()[$id] ?? abort(404);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        $this->users()[$id] ?? abort(404);

        $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'email' => ['required', 'email'],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', __('messages.user_updated'));
    }
}
