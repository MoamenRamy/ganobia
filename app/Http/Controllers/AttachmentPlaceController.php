<?php

namespace App\Http\Controllers;

use App\Models\AttachmentPlace;
use Illuminate\Http\Request;

class AttachmentPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attachmentPlaces = AttachmentPlace::latest()->paginate(10);

        return view('attachment_places.index', compact('attachmentPlaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attachment_places.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:attachment_places,name',
        ]);

        AttachmentPlace::create($validated);

        return redirect()
            ->route('attachment-places.index')
            ->with('success', 'تم إضافة جهة الإلحاق بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(AttachmentPlace $attachmentPlace)
    {
        $attachmentPlace->load('places');
        return view('attachment_places.show', compact('attachmentPlace'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttachmentPlace $attachmentPlace)
    {
        return view('attachment_places.edit', compact('attachmentPlace'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttachmentPlace $attachmentPlace)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:attachment_places,name,' . $attachmentPlace->id,
        ]);

        $attachmentPlace->update($validated);

        return redirect()
            ->route('attachment-places.index')
            ->with('success', 'تم تعديل جهة الإلحاق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttachmentPlace $attachmentPlace)
    {
        $attachmentPlace->delete();

        return redirect()
            ->route('attachment-places.index')
            ->with('success', 'تم حذف جهة الإلحاق بنجاح');
    }
}