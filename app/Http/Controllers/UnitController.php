<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Sector;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::with('sector')
            ->latest()
            ->paginate(15);

        return view('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(?Sector $sector = null)
    {
        // dd($sector);
        $sectors = Sector::all();

        return view('units.create', compact('sectors', 'sector'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sector_id'               => 'nullable|exists:sectors,id',
            'name'                    => 'required|string|max:255|unique:units,name',
            'moratab'                 => 'required|integer|min:0',
            'seasa'                   => 'required|integer|min:0',
            'soldiers'                => 'required|integer|min:0',
            'volunteers'              => 'required|integer|min:0',
            'total'                   => 'required|integer|min:0',
            'nesbat_estkmal_seasa'    => 'required|integer|min:0',
            'nesbat_estkmal_moratab'  => 'required|integer|min:0',
        ]);

        Unit::create($validated);

        return redirect()
            ->route('sectors.show', $request->sector_id)
            ->with('success', 'تم إضافة الوحدة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        $unit->load('sector');

        return view('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        $sectors = Sector::all();

        return view('units.edit', compact('unit', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $validated = $request->validate([
            'sector_id'               => 'nullable|exists:sectors,id',
            'name'                    => 'required|string|max:255|unique:units,name,' . $unit->id,
            'moratab'                 => 'required|integer|min:0',
            'seasa'                   => 'required|integer|min:0',
            'soldiers'                => 'required|integer|min:0',
            'volunteers'              => 'required|integer|min:0',
            'total'                   => 'required|integer|min:0',
            'nesbat_estkmal_seasa'    => 'required|integer|min:0',
            'nesbat_estkmal_moratab'  => 'required|integer|min:0',
        ]);

        $unit->update($validated);

        return redirect()
            ->route('sectors.show', $request->sector_id)
            ->with('success', 'تم تعديل الوحدة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $page = $unit->sector_id;
        $unit->delete();

        return redirect()
            ->route('sectors.show', $page)
            ->with('success', 'تم حذف الوحدة بنجاح');
    }
}
