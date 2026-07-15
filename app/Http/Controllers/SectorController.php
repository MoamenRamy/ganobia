<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectors = Sector::latest()->paginate(10);

        return view('sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sectors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255|unique:sectors,name',
            'place' => 'nullable|string|max:255',
        ]);

        Sector::create([
            'name'  => $validated['name'],
            'place' => $validated['place'] ?? 'Unknown',
        ]);

        return redirect()
            ->route('sectors.index')
            ->with('success', 'تم إضافة القطاع بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sector $sector)
    {
        $sector->load('units');
        return view('sectors.show', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sector $sector)
    {
        return view('sectors.edit', compact('sector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sector $sector)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255|unique:sectors,name,' . $sector->id,
            'place' => 'nullable|string|max:255',
        ]);

        $sector->update([
            'name'  => $validated['name'],
            'place' => $validated['place'] ?? 'Unknown',
        ]);

        return redirect()
            ->route('sectors.index')
            ->with('success', 'تم تعديل القطاع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sector $sector)
    {
        $sector->delete();

        return redirect()
            ->route('sectors.index')
            ->with('success', 'تم حذف القطاع بنجاح');
    }
}