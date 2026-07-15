<?php

namespace App\Http\Controllers;

use App\Exports\SoldiersExport;
use App\Models\Soldier;
use App\Models\Sector;
use App\Models\Unit;
use App\Models\Weapon;
use App\Models\Place;
use App\Models\Government;
use App\Models\Specialtie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Imports\SoldiersImport;
use Exception;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;


class SoldierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soldiers = Soldier::with([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place',
        ])->latest()->paginate(1000);

        return view('soldiers.index', compact('soldiers'));
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

        return view('soldiers.create', compact(
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
            'military_number'         => 'required|unique:soldiers,military_number',
            'rank'                    => 'nullable|string|max:255',
            'name'                    => 'required|string|max:255',

            'sector_id'               => 'nullable|exists:sectors,id',
            'unit_id'                 => 'nullable|exists:units,id',
            'weapon_id'               => 'nullable|exists:weapons,id',
            'specialization_id'       => 'nullable|exists:specialties,id',
            'governorate_id'          => 'nullable|exists:governments,id',
            'attachment_id'           => 'nullable|exists:places,id',

            'category'                => 'nullable|string|max:255',

            'enlistment_date'         => 'nullable|date',
            'discharge_date'          => 'nullable|date',
            'birth_date'              => 'nullable|date',
            'supply_date'             => 'nullable|date',

            'national_id'             => 'nullable|string|max:14',

            'driving_license_grade'   => 'nullable|string|max:255',
            'qualification'           => 'nullable|string|max:255',
            'job_before_service'      => 'nullable|string|max:255',

            'marital_status'          => 'nullable|string|max:255',

            'male_children_count'     => 'nullable|integer|min:0',
            'female_children_count'   => 'nullable|integer|min:0',

            'mother_name'             => 'nullable|string|max:255',
            'mother_job'              => 'nullable|string|max:255',
            'father_job'              => 'nullable|string|max:255',

            'phone_number'            => 'nullable|string|max:20',

            'nearest_relative'        => 'nullable|string|max:255',
            'nearest_relative_phone'  => 'nullable|string|max:20',

            'address'                 => 'nullable|string',
            'notes'                   => 'nullable|string',

            'height'                  => 'nullable|numeric',
            'weight'                  => 'nullable|numeric',

            'attendance'              => 'nullable|boolean',
        ]);

        // $validated['qualified'] = $validated['qualified'] ?? 0;
        // $validated['not_qualified'] = $validated['not_qualified'] ?? 0;
        // $validated['detention_count'] = $validated['detention_count'] ?? 0;
        // $validated['imprisonment_count'] = $validated['imprisonment_count'] ?? 0;
        // $validated['court_cases_count'] = $validated['court_cases_count'] ?? 0;
        // $validated['children_count'] = $validated['children_count'] ?? 0;
        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        Soldier::create($validated);

        return redirect()
            ->route('soldiers.index')
            ->with('success', 'تم إضافة المجند بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Soldier $soldier)
    {
        $soldier->load([
            'sector',
            'unit',
            'weapon',
            'specialization',
            'governorate',
            'attachment_place'
        ]);

        return view('soldiers.show', compact('soldier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Soldier $soldier)
    {
        $sectors       = Sector::all();
        $units         = Unit::all();
        $weapons       = Weapon::all();
        $specialties   = Specialtie::all();
        $governorates  = Government::all();
        $places        = Place::all();

        return view('soldiers.edit', compact(
            'soldier',
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
    public function update(Request $request, Soldier $soldier)
    {
        $validated = $request->validate([
            'military_number' => [
                'required',
                Rule::unique('soldiers', 'military_number')->ignore($soldier->id),
            ],
            'rank'                    => 'nullable|string|max:255',
            'name'                    => 'required|string|max:255',

            'sector_id'               => 'nullable|exists:sectors,id',
            'unit_id'                 => 'nullable|exists:units,id',
            'weapon_id'               => 'nullable|exists:weapons,id',
            'specialization_id'       => 'nullable|exists:specialties,id',
            'governorate_id'          => 'nullable|exists:governments,id',
            'attachment_id'           => 'nullable|exists:places,id',

            'category'                => 'nullable|string|max:255',

            'enlistment_date'         => 'nullable|date',
            'discharge_date'          => 'nullable|date',
            'birth_date'              => 'nullable|date',
            'supply_date'             => 'nullable|date',

            'national_id'             => 'nullable|string|max:14',

            'driving_license_grade'   => 'nullable|string|max:255',
            'qualification'           => 'nullable|string|max:255',
            'job_before_service'      => 'nullable|string|max:255',

            'marital_status'          => 'nullable|string|max:255',

            'male_children_count'     => 'nullable|integer|min:0',
            'female_children_count'   => 'nullable|integer|min:0',

            'mother_name'             => 'nullable|string|max:255',
            'mother_job'              => 'nullable|string|max:255',
            'father_job'              => 'nullable|string|max:255',

            'phone_number'            => 'nullable|string|max:20',

            'nearest_relative'        => 'nullable|string|max:255',
            'nearest_relative_phone'  => 'nullable|string|max:20',

            'address'                 => 'nullable|string',
            'notes'                   => 'nullable|string',

            'height'                  => 'nullable|numeric',
            'weight'                  => 'nullable|numeric',

            'attendance'              => 'nullable|boolean',
        ]);

        // $validated['qualified'] = $validated['qualified'] ?? 0;
        // $validated['not_qualified'] = $validated['not_qualified'] ?? 0;
        // $validated['detention_count'] = $validated['detention_count'] ?? 0;
        // $validated['imprisonment_count'] = $validated['imprisonment_count'] ?? 0;
        // $validated['court_cases_count'] = $validated['court_cases_count'] ?? 0;
        // $validated['children_count'] = $validated['children_count'] ?? 0;
        $validated['male_children_count'] = $validated['male_children_count'] ?? 0;
        $validated['female_children_count'] = $validated['female_children_count'] ?? 0;

        $soldier->update($validated);

        return redirect()
            ->route('soldiers.index')
            ->with('success', 'تم تعديل بيانات المجند بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soldier $soldier)
    {
        $soldier->delete();

        return redirect()
            ->route('soldiers.index')
            ->with('success', 'تم حذف المجند بنجاح');
    }

    public function importPage()
    {
        // dd('Import Page');
        return view('soldiers.import');
    }

    public function import(Request $request)
    {
        $request->validate([
        'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $import = new SoldiersImport();

        // استيراد مباشر
        Excel::import($import, $request->file('file'));
        // Excel::import(
        //     new SoldiersImport(),
        //     $request->file('file')
        // );

        // الحصول على الإحصائيات
        $statistics = $import->statistics();
        $summary = $statistics->summary();

        return redirect()
            ->route('soldiers.index')
            ->with([
                'success' => "✅ تم استيراد {$summary['inserted_rows']} سجل جديد وتحديث {$summary['updated_rows']} سجل",
                // 'statistics' => $summary,
                // 'success' => 'جارى تحميل البيانات'
            ]);
    }
    // public function import(Request $request)
    // {
    //     $request->validate([ 'file' => [ 'required', 'file', 'mimes:xlsx,xls,csv', ], ]);
    //     try {
    //         $import = new SoldiersImport();
    //         Excel::import( $import, $request->file('file') );
    //         return redirect()
    //         ->route('soldiers.index')
    //         ->with( 'success', 'تم استيراد البيانات بنجاح.' );
    //         } catch (Exception $e)
    //         {
    //             logger()->error( 'Soldiers Import Error : ' . $e->getMessage() );
    //             return
    //             back()
    //             ->withInput()
    //             ->with( 'error', 'حدث خطأ أثناء استيراد الملف.' );
    //         }

    // }

    public function export()
    {
        return Excel::download(

            new SoldiersExport(),

            'soldiers_' . now()->format('Y_m_d_H_i_s') . '.xlsx'

        );
    }
}
