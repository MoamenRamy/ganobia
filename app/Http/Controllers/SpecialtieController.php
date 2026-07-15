<?php

namespace App\Http\Controllers;

use App\Models\Specialtie;
use Illuminate\Http\Request;

class SpecialtieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = Specialtie::latest()->paginate(10);

        return view('specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specialties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:specialties,name',
        ]);

        Specialtie::create($validated);

        return redirect()
            ->route('specialties.index')
            ->with('success', 'تم إضافة التخصص بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialtie $specialty)
    {
        return view('specialties.show', compact('specialty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialtie $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialtie $specialty)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:specialties,name,' . $specialty->id,
        ]);

        $specialty->update($validated);

        return redirect()
            ->route('specialties.index')
            ->with('success', 'تم تعديل التخصص بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialtie $specialty)
    {
        $specialty->delete();

        return redirect()
            ->route('specialties.index')
            ->with('success', 'تم حذف التخصص بنجاح');
    }
}