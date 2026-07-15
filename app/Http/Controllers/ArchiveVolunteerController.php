<?php

namespace App\Http\Controllers;

use App\Models\ArchiveVolunteer;
use App\Models\Sector;
use App\Models\Unit;
use App\Models\Weapon;
use App\Models\Government;
use App\Models\Place;
use App\Models\Specialtie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ArchiveVolunteerController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archiveVolunteers = ArchiveVolunteer::with([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ])->latest()->paginate(500);

        return view('archive_volunteers.index', compact('archiveVolunteers'));
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

        return view('archive_volunteers.create', compact(
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

            'military_number'       => 'required|unique:volunteers,military_number',
            'rank'                  => 'nullable|string|max:255',
            'name'                  => 'required|string|max:255',

            'unit_id'               => 'nullable|exists:units,id',
            'sector_id'             => 'nullable|exists:sectors,id',
            'weapon_id'             => 'nullable|exists:weapons,id',
            'specialization_id'     => 'nullable|exists:specialties,id',
            'governorate_id'        => 'nullable|exists:governments,id',
            'attachment_id'         => 'nullable|exists:places,id',

            'batch_number'          => 'nullable|string|max:255',

            'enlistment_date'       => 'nullable|date',
            'high_salary_date'      => 'nullable|date',
            'current_rank_date'     => 'nullable|date',
            'southern_region_join_date'        => 'nullable|date',
            'unit_join_date'        => 'nullable|date',

            'educational_qualification' => 'nullable|string|max:255',

            'category'              => 'nullable|string|max:255',

            'qualified'             => 'nullable|boolean',
            'not_qualified'         => 'nullable|boolean',

            'detention_count'       => 'nullable|integer|min:0',
            'imprisonment_count'    => 'nullable|integer|min:0',
            'court_cases_count'     => 'nullable|integer|min:0',

            'phone_number'          => 'nullable|string|max:20',
            'relative_phone_number' => 'nullable|string|max:20',

            'national_id'           => 'nullable|string|max:14',
            'birth_date'            => 'nullable|date',

            'marital_status'        => 'nullable|string|max:255',

            'children_count'        => 'nullable|integer|min:0',
            'male_children_count'   => 'nullable|integer|min:0',
            'female_children_count' => 'nullable|integer|min:0',

            'village'               => 'nullable|string|max:255',
            'center'                => 'nullable|string|max:255',

            'weight'                => 'nullable|numeric',
            'height'                => 'nullable|numeric',
            'weight_difference'     => 'nullable|numeric',

            'previous_units'        => 'nullable|string',

            'travel'                => 'nullable|string',

            'medical_status'        => 'nullable|string|max:255',

            'notes'                 => 'nullable|string',
            'reviewer'              => 'nullable|string',
        ]);

        $validated['qualified'] = $validated['qualified'] ?? 0;
        $validated['not_qualified'] = $validated['not_qualified'] ?? 0;
        $validated['detention_count'] = $validated['detention_count'] ?? 0;
        $validated['imprisonment_count'] = $validated['imprisonment_count'] ?? 0;
        $validated['court_cases_count'] = $validated['court_cases_count'] ?? 0;
        $validated['children_count'] = $validated['children_count'] ?? 0;
        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        ArchiveVolunteer::create($validated);

        return redirect()
            ->route('archive-volunteers.index')
            ->with('success', 'تم إضافة البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArchiveVolunteer $archiveVolunteer)
    {
        $archiveVolunteer->load([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ]);
        return view('archive_volunteers.show', compact('archiveVolunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArchiveVolunteer $archiveVolunteer)
    {
        $sectors       = Sector::all();
        $units         = Unit::all();
        $weapons       = Weapon::all();
        $specialties   = Specialtie::all();
        $governorates  = Government::all();
        $places       = Place::all();

        return view('archive_volunteers.edit', compact(
            'archiveVolunteer',
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
    public function update(Request $request, ArchiveVolunteer $archiveVolunteer)
    {
        $validated = $request->validate([

            'military_number'       => [
                'required',
                Rule::unique('archive_volunteers', 'military_number')->ignore($archiveVolunteer->id),
            ],
            'rank'                  => 'nullable|string|max:255',
            'name'                  => 'required|string|max:255',

            'unit_id'               => 'nullable|exists:units,id',
            'sector_id'             => 'nullable|exists:sectors,id',
            'weapon_id'             => 'nullable|exists:weapons,id',
            'specialization_id'     => 'nullable|exists:specialties,id',
            'governorate_id'        => 'nullable|exists:governments,id',
            'attachment_id'         => 'nullable|exists:places,id',

            'batch_number'          => 'nullable|string|max:255',

            'enlistment_date'       => 'nullable|date',
            'high_salary_date'      => 'nullable|date',
            'current_rank_date'     => 'nullable|date',
            'southern_region_join_date'        => 'nullable|date',
            'unit_join_date'        => 'nullable|date',

            'educational_qualification' => 'nullable|string|max:255',

            'category'              => 'nullable|string|max:255',

            'qualified'             => 'nullable|boolean',
            'not_qualified'         => 'nullable|boolean',

            'detention_count'       => 'nullable|integer|min:0',
            'imprisonment_count'    => 'nullable|integer|min:0',
            'court_cases_count'     => 'nullable|integer|min:0',

            'phone_number'          => 'nullable|string|max:20',
            'relative_phone_number' => 'nullable|string|max:20',

            'national_id'           => 'nullable|string|max:14',
            'birth_date'            => 'nullable|date',

            'marital_status'        => 'nullable|string|max:255',

            'children_count'        => 'nullable|integer|min:0',
            'male_children_count'   => 'nullable|integer|min:0',
            'female_children_count' => 'nullable|integer|min:0',

            'village'               => 'nullable|string|max:255',
            'center'                => 'nullable|string|max:255',

            'weight'                => 'nullable|numeric',
            'height'                => 'nullable|numeric',
            'weight_difference'     => 'nullable|numeric',

            'previous_units'        => 'nullable|string',

            'travel'                => 'nullable|string',

            'medical_status'        => 'nullable|string|max:255',

            'notes'                 => 'nullable|string',
            'reviewer'              => 'nullable|string',
        ]);

        $validated['qualified'] = $validated['qualified'] ?? 0;
        $validated['not_qualified'] = $validated['not_qualified'] ?? 0;
        $validated['detention_count'] = $validated['detention_count'] ?? 0;
        $validated['imprisonment_count'] = $validated['imprisonment_count'] ?? 0;
        $validated['court_cases_count'] = $validated['court_cases_count'] ?? 0;
        $validated['children_count'] = $validated['children_count'] ?? 0;
        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        $archiveVolunteer->update($validated);

        return redirect()
            ->route('archive-volunteers.index')
            ->with('success', 'تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArchiveVolunteer $archiveVolunteer)
    {
        $archiveVolunteer->delete();

        return redirect()
            ->route('archive-volunteers.index')
            ->with('success', 'تم حذف البيانات بنجاح');
    }
}