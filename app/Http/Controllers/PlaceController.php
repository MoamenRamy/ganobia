<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\AttachmentPlace;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::with('attachmentPlace')
            ->latest()
            ->paginate(10);

        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(?AttachmentPlace $attachmentPlace = null)
    {
        $attachmentPlaces = AttachmentPlace::all();

        return view('places.create', compact('attachmentPlaces', 'attachmentPlace'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:places,name',
            'attachment_place_id' => 'required|exists:attachment_places,id',
        ]);

        Place::create($validated);

        return redirect()
            ->route('attachment-places.show', $request->attachment_place_id)
            ->with('success', 'تم إضافة الجهة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        $place->load('attachmentPlace');

        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        $attachmentPlaces = AttachmentPlace::all();

        return view('places.edit', compact(
            'place',
            'attachmentPlaces'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:places,name,' . $place->id,
            'attachment_place_id' => 'required|exists:attachment_places,id',
        ]);

        $place->update($validated);

        return redirect()
            ->route('attachment-places.show', $place->attachment_place_id)
            ->with('success', 'تم تعديل الجهة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        $page = $place->attachment_place_id;

        $place->delete();

        return redirect()
            ->route('attachment-places.show', $page)
            ->with('success', 'تم حذف الجهة بنجاح');
    }
}