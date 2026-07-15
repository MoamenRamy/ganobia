<?php

namespace App\Http\Controllers;

use App\Exports\VolunteersExport;
use App\Imports\VolunteersImport;
use App\Models\Volunteer;
use App\Models\Sector;
use App\Models\Unit;
use App\Models\Weapon;
use App\Models\Place;
use App\Models\Government;
use App\Models\Specialtie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;


class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteers = Volunteer::with([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ])->latest()->paginate(500);

        return view('volunteers.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectors      = Sector::all();
        $units        = Unit::all();
        $weapons      = Weapon::all();
        $specialties  = Specialtie::all();
        $governorates = Government::all();
        $places       = Place::all();

        return view('volunteers.create', compact(
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

        Volunteer::create($validated);

        return redirect()
            ->route('volunteers.index')
            ->with('success', 'تم إضافة المتطوع بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        $volunteer->load([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ]);

        return view('volunteers.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        $sectors      = Sector::all();
        $units        = Unit::all();
        $weapons      = Weapon::all();
        $specialties  = Specialtie::all();
        $governorates = Government::all();
        $places       = Place::all();

        return view('volunteers.edit', compact(
            'volunteer',
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
    public function update(Request $request, Volunteer $volunteer)
    {
        $validated = $request->validate([

            'military_number'       => [
                'required',
                Rule::unique('volunteers', 'military_number')->ignore($volunteer->id),
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

        $volunteer->update($validated);

        return redirect()
            ->route('volunteers.index')
            ->with('success', 'تم تعديل بيانات المتطوع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        $volunteer->delete();

        return redirect()
            ->route('volunteers.index')
            ->with('success', 'تم حذف المتطوع بنجاح');
    }

    public function importPage()
    {
        // dd('Import Page');
        return view('volunteers.import');
    }

    public function import(Request $request)
    {
        $request->validate([

            'file' => 'required|file|mimes:xlsx,xls,csv',

        ]);
        // dd($request->file('file')->getClientOriginalName());
        $import = new VolunteersImport();

        // DB::listen(function ($query) {
        //     dump($query->sql);
        // });

        Excel::import(

            $import,

            $request->file('file')

        );


        return view(

            'volunteers.import-report',

            [

                'statistics' => $import->statistics(),

                'failures' => $import->failures(),

                'errors' => $import->errors(),

            ]

        );
    }

    public function export()
    {
        return Excel::download(

            new VolunteersExport(),

            'Rateb-3aly_' . now()->format('Y_m_d_H_i_s') . '.xlsx'

        );
    }

}
