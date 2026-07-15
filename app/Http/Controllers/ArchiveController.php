<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Government;
use App\Models\Place;
use App\Models\Sector;
use App\Models\Specialtie;
use App\Models\Unit;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archives = Archive::with([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place',
        ])->latest()->paginate(1000);

        return view('archives.index', compact('archives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectors       = Sector::all();
        $units         = Unit::all();
        $weapons       = Weapon::all();
        $specialties   = Specialtie::all();
        $governorates  = Government::all();
        $places        = Place::all();

        return view('archives.create', compact(
            'sectors',
            'units',
            'weapons',
            'specialties',
            'governorates',
            'places'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'military_number'          => 'required|unique:archives,military_number',
            'rank'                     => 'nullable|string|max:255',
            'name'                     => 'required|string|max:255',

            'sector_id'                => 'nullable|exists:sectors,id',
            'unit_id'                  => 'nullable|exists:units,id',
            'weapon_id'                => 'nullable|exists:weapons,id',
            'specialization_id'        => 'nullable|exists:specialties,id',
            'governorate_id'           => 'nullable|exists:governments,id',

            'category'                 => 'nullable|string|max:255',

            'enlistment_date'          => 'nullable|date',
            'discharge_date'           => 'nullable|date',
            'birth_date'               => 'nullable|date',

            'national_id'              => 'nullable|string|max:14',

            'driving_license_grade'    => 'nullable|string|max:255',
            'qualification'            => 'nullable|string|max:255',
            'job_before_service'       => 'nullable|string|max:255',

            'marital_status'           => 'nullable|string|max:255',

            'male_children_count'      => 'nullable|integer|min:0',
            'female_children_count'    => 'nullable|integer|min:0',

            'mother_name'              => 'nullable|string|max:255',
            'mother_job'               => 'nullable|string|max:255',
            'father_job'               => 'nullable|string|max:255',

            'phone_number'             => 'nullable|string|max:20',

            'nearest_relative'         => 'nullable|string|max:255',
            'nearest_relative_phone'   => 'nullable|string|max:20',

            'address'                  => 'nullable|string',

            'height'                   => 'nullable|numeric',
            'weight'                   => 'nullable|numeric',

            'supply_date'              => 'nullable|date',

            'notes'                    => 'nullable|string',

            'attendance'               => 'nullable|boolean',
        ]);

        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        Archive::create($validated);

        return redirect()
            ->route('archives.index')
            ->with('success', 'تم إضافة السجل بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Archive $archive)
    {
        $archive->load([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ]);
        return view('archives.show', compact('archive'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archive $archive)
    {
        $sectors       = Sector::all();
        $units         = Unit::all();
        $weapons       = Weapon::all();
        $specialties   = Specialtie::all();
        $governorates  = Government::all();
        $places        = Place::all();

        return view('archives.edit', compact(
            'archive',
            'sectors',
            'units',
            'weapons',
            'specialties',
            'governorates',
            'places'
            ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archive $archive)
    {
        $validated = $request->validate([
            'military_number' => [
                'required',
                Rule::unique('archives', 'military_number')->ignore($archive->id),
            ],
            'rank'                     => 'nullable|string|max:255',
            'name'                     => 'required|string|max:255',

            'sector_id'                => 'nullable|exists:sectors,id',
            'unit_id'                  => 'nullable|exists:units,id',
            'weapon_id'                => 'nullable|exists:weapons,id',
            'specialization_id'        => 'nullable|exists:specialties,id',
            'governorate_id'           => 'nullable|exists:governments,id',

            'category'                 => 'nullable|string|max:255',

            'enlistment_date'          => 'nullable|date',
            'discharge_date'           => 'nullable|date',
            'birth_date'               => 'nullable|date',

            'national_id'              => 'nullable|string|max:14',

            'driving_license_grade'    => 'nullable|string|max:255',
            'qualification'            => 'nullable|string|max:255',
            'job_before_service'       => 'nullable|string|max:255',

            'marital_status'           => 'nullable|string|max:255',

            'male_children_count'      => 'nullable|integer|min:0',
            'female_children_count'    => 'nullable|integer|min:0',

            'mother_name'              => 'nullable|string|max:255',
            'mother_job'               => 'nullable|string|max:255',
            'father_job'               => 'nullable|string|max:255',

            'phone_number'             => 'nullable|string|max:20',

            'nearest_relative'         => 'nullable|string|max:255',
            'nearest_relative_phone'   => 'nullable|string|max:20',

            'address'                  => 'nullable|string',

            'height'                   => 'nullable|numeric',
            'weight'                   => 'nullable|numeric',

            'supply_date'              => 'nullable|date',

            'notes'                    => 'nullable|string',

            'attendance'               => 'nullable|boolean',
        ]);

        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        $archive->update($validated);

        return redirect()
            ->route('archives.index')
            ->with('success', 'تم تحديث السجل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archive $archive)
    {
        $archive->delete();

        return redirect()
            ->route('archives.index')
            ->with('success', 'تم حذف السجل بنجاح');
    }
}