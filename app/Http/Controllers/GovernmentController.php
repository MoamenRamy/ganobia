<?php

namespace App\Http\Controllers;

use App\Models\Government;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $governments = Government::orderBy('id', 'desc')->get();
        // $governments = Government::orderBy('id', 'asc')->get();
        $governments = Government::all();

        return view('governments.index', compact('governments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('governments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:governments,name',
        ]);

        Government::create($validated);

        return redirect()
            ->route('governments.index')
            ->with('success', 'تم إضافة المحافظة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Government $government)
    {
        return view('governments.show', compact('government'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Government $government)
    {
        return view('governments.edit', compact('government'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Government $government)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:governments,name,' . $government->id,
        ]);

        $government->update($validated);

        return redirect()
            ->route('governments.index')
            ->with('success', 'تم تعديل المحافظة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Government $government)
    {
        $government->delete();

        return redirect()
            ->route('governments.index')
            ->with('success', 'تم حذف المحافظة بنجاح');
    }
}
