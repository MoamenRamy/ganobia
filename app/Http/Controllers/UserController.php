<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')
            ->latest()
            ->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role_id'  => 'required|exists:roles,id',
        ]);
        
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()
            ->route('users.index')
            ->with('success', 'تم إضافة المستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load('role');

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()
            ->route('users.index')
            ->with('success', 'تم تعديل المستخدم بنجاح');
    }

    /**
     * Update user password.
     */
    public function updatePassword(Request $request, User $user)
    {
        $validated = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('users.edit', $user)
            ->with('success', 'تم تغيير كلمة المرور بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // if (auth()->id() == $user->id) {
        //     return redirect()
        //         ->route('users.index')
        //         ->with('error', 'لا يمكن حذف المستخدم الحالي');
        // }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'تم حذف المستخدم بنجاح');
    }
}
