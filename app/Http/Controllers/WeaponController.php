<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weapons = Weapon::latest()->paginate(10);

        return view('weapons.index', compact('weapons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:weapons,name',
        ]);

        Weapon::create($validated);

        return redirect()
            ->route('weapons.index')
            ->with('success', 'تم إضافة السلاح بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
        return view('weapons.show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weapon $weapon)
    {
        return view('weapons.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weapon $weapon)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:weapons,name,' . $weapon->id,
        ]);

        $weapon->update($validated);

        return redirect()
            ->route('weapons.index')
            ->with('success', 'تم تعديل السلاح بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weapon $weapon)
    {
        $weapon->delete();

        return redirect()
            ->route('weapons.index')
            ->with('success', 'تم حذف السلاح بنجاح');
    }
}
