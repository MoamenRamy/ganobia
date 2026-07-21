<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ArchiveVolunteerController;
use App\Http\Controllers\AttachmentPlaceController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\SoldierController;
use App\Http\Controllers\SpecialtieController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WeaponController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// users
Route::resource('users', UserController::class)->middleware('role:1');

// soldiers archive
// Route::resource('archives', ArchiveController::class);
Route::get('/archives', [ArchiveController::class, 'index'])->name('archives.index')->middleware('role:1,2,3');
Route::get('/archives/create', [ArchiveController::class, 'create'])->name('archives.create')->middleware('role:1,2,3');
Route::post('/archives', [ArchiveController::class, 'store'])->name('archives.store')->middleware('role:1,2,3');
Route::get('/archives/{archive}', [ArchiveController::class, 'show'])->name('archives.show')->middleware('role:1,2,3');
Route::get('/archives/{archive}/edit', [ArchiveController::class, 'edit'])->name('archives.edit')->middleware('role:1,2,3');
Route::put('/archives/{archive}', [ArchiveController::class, 'update'])->name('archives.update')->middleware('role:1,2,3');
Route::delete('/archives/{archive}', [ArchiveController::class, 'destroy'])->name('archives.destroy')->middleware('role:1,2,3');

// volunteers archive
// Route::resource('archive-volunteers', ArchiveVolunteerController::class);
Route::get('/archive-volunteers', [ArchiveVolunteerController::class, 'index'])->name('archive-volunteers.index')->middleware('role:1,2,4');
Route::get('/archive-volunteers/create', [ArchiveVolunteerController::class, 'create'])->name('archive-volunteers.create')->middleware('role:1,2,4');
Route::post('/archive-volunteers', [ArchiveVolunteerController::class, 'store'])->name('archive-volunteers.store')->middleware('role:1,2,4');
Route::get('/archive-volunteers/{archive_volunteer}', [ArchiveVolunteerController::class, 'show'])->name('archive-volunteers.show')->middleware('role:1,2,4');
Route::get('/archive-volunteers/{archive_volunteer}/edit', [ArchiveVolunteerController::class, 'edit'])->name('archive-volunteers.edit')->middleware('role:1,2,4');
Route::put('/archive-volunteers/{archive_volunteer}', [ArchiveVolunteerController::class, 'update'])->name('archive-volunteers.update')->middleware('role:1,2,4');
Route::delete('/archive-volunteers/{archive_volunteer}', [ArchiveVolunteerController::class, 'destroy'])->name('archive-volunteers.destroy')->middleware('role:1,2,4');

// attachment places
// Route::resource('attachment-places', AttachmentPlaceController::class);
Route::get('/attachment-places', [AttachmentPlaceController::class, 'index'])->name('attachment-places.index');
Route::get('/attachment-places/create', [AttachmentPlaceController::class, 'create'])->name('attachment-places.create')->middleware('role:1,2');
Route::post('/attachment-places', [AttachmentPlaceController::class, 'store'])->name('attachment-places.store')->middleware('role:1,2');
Route::get('/attachment-places/{attachment_place}', [AttachmentPlaceController::class, 'show'])->name('attachment-places.show');
Route::get('/attachment-places/{attachment_place}/edit', [AttachmentPlaceController::class, 'edit'])->name('attachment-places.edit')->middleware('role:1,2');
Route::put('/attachment-places/{attachment_place}', [AttachmentPlaceController::class, 'update'])->name('attachment-places.update')->middleware('role:1,2');
Route::delete('/attachment-places/{attachment_place}', [AttachmentPlaceController::class, 'destroy'])->name('attachment-places.destroy')->middleware('role:1,2');

// governments
// Route::resource('governments', GovernmentController::class);
Route::get('/governments', [GovernmentController::class, 'index'])->name('governments.index');
Route::get('/governments/create', [GovernmentController::class, 'create'])->name('governments.create')->middleware('role:1,2');
Route::post('/governments', [GovernmentController::class, 'store'])->name('governments.store')->middleware('role:1,2');
Route::get('/governments/{government}', [GovernmentController::class, 'show'])->name('governments.show');
Route::get('/governments/{government}/edit', [GovernmentController::class, 'edit'])->name('governments.edit')->middleware('role:1,2');
Route::put('/governments/{government}', [GovernmentController::class, 'update'])->name('governments.update')->middleware('role:1,2');
Route::delete('/governments/{government}', [GovernmentController::class, 'destroy'])->name('governments.destroy')->middleware('role:1,2');

// volunteers
// Route::resource('volunteers', VolunteerController::class);
Route::get('/volunteers/import-excel', [VolunteerController::class, 'importPage'])->name('volunteers.importPage')->middleware('role:1,2,4');
Route::post('/volunteers/import',[VolunteerController::class, 'import'])->name('volunteers.import')->middleware('role:1,2,4');
Route::get('/volunteers/export',[VolunteerController::class, 'export'])->name('volunteers.export')->middleware('role:1,2,4');
Route::get('/volunteers', [VolunteerController::class, 'index'])->name('volunteers.index')->middleware('role:1,2,4');
Route::get('/volunteers/create', [VolunteerController::class, 'create'])->name('volunteers.create')->middleware('role:1,2,4');
Route::post('/volunteers', [VolunteerController::class, 'store'])->name('volunteers.store')->middleware('role:1,2,4');
Route::get('/volunteers/{volunteer}', [VolunteerController::class, 'show'])->name('volunteers.show');
Route::get('/volunteers/{volunteer}/edit', [VolunteerController::class, 'edit'])->name('volunteers.edit')->middleware('role:1,2,4');
Route::put('/volunteers/{volunteer}', [VolunteerController::class, 'update'])->name('volunteers.update')->middleware('role:1,2,4');
Route::delete('/volunteers/{volunteer}', [VolunteerController::class, 'destroy'])->name('volunteers.destroy')->middleware('role:1,2,4');

// weapons
// Route::resource('weapons', WeaponController::class);
Route::get('/weapons', [WeaponController::class, 'index'])->name('weapons.index');
Route::get('/weapons/create', [WeaponController::class, 'create'])->name('weapons.create')->middleware('role:1,2');
Route::post('/weapons', [WeaponController::class, 'store'])->name('weapons.store')->middleware('role:1,2');
Route::get('/weapons/{weapon}', [WeaponController::class, 'show'])->name('weapons.show');
Route::get('/weapons/{weapon}/edit', [WeaponController::class, 'edit'])->name('weapons.edit')->middleware('role:1,2');
Route::put('/weapons/{weapon}', [WeaponController::class, 'update'])->name('weapons.update')->middleware('role:1,2');
Route::delete('/weapons/{weapon}', [WeaponController::class, 'destroy'])->name('weapons.destroy')->middleware('role:1,2');

// roles
// Route::resource('roles', RoleController::class);
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index')->middleware('role:1');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create')->middleware('role:1');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store')->middleware('role:1');
Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show')->middleware('role:1');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit')->middleware('role:1');
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update')->middleware('role:1');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('role:1');

// soldiers
// Route::resource('soldiers', SoldierController::class);
Route::get('/soldiers/import-excel', [SoldierController::class, 'importPage'])->name('soldiers.importPage')->middleware('role:1,2,3');
Route::post('/soldiers/import-excel', [SoldierController::class, 'import'])->name('soldiers.import')->middleware('role:1,2,3');
Route::get('/soldiers/export',[SoldierController::class, 'export'])->name('soldiers.export')->middleware('role:1,2,3');
Route::get('/soldiers', [SoldierController::class, 'index'])->name('soldiers.index')->middleware('role:1,2,3');
Route::get('/soldiers/create', [SoldierController::class, 'create'])->name('soldiers.create')->middleware('role:1,2,3');
Route::post('/soldiers', [SoldierController::class, 'store'])->name('soldiers.store')->middleware('role:1,2,3');
Route::get('/soldiers/{soldier}', [SoldierController::class, 'show'])->name('soldiers.show')->middleware('role:1,2,3');
Route::get('/soldiers/{soldier}/edit', [SoldierController::class, 'edit'])->name('soldiers.edit')->middleware('role:1,2,3');
Route::put('/soldiers/{soldier}', [SoldierController::class, 'update'])->name('soldiers.update')->middleware('role:1,2,3');
Route::delete('/soldiers/{soldier}', [SoldierController::class, 'destroy'])->name('soldiers.destroy')->middleware('role:1,2,3');

// places
Route::get('/places', [PlaceController::class, 'index'])->name('places.index');
Route::get('/places/create/{attachmentPlace?}', [PlaceController::class, 'create'])->name('places.create')->middleware('role:1,2');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store')->middleware('role:1,2');
Route::get('/places/{place}', [PlaceController::class, 'show'])->name('places.show');
Route::get('/places/{place}/edit', [PlaceController::class, 'edit'])->name('places.edit')->middleware('role:1,2');
Route::put('/places/{place}', [PlaceController::class, 'update'])->name('places.update')->middleware('role:1,2');
Route::delete('/places/{place}', [PlaceController::class, 'destroy'])->name('places.destroy')->middleware('role:1,2');

// sectors
// Route::resource('sectors', SectorController::class);
Route::get('/sectors', [SectorController::class, 'index'])->name('sectors.index');
Route::get('/sectors/create', [SectorController::class, 'create'])->name('sectors.create')->middleware('role:1,2');
Route::post('/sectors', [SectorController::class, 'store'])->name('sectors.store')->middleware('role:1,2');
Route::get('/sectors/{sector}', [SectorController::class, 'show'])->name('sectors.show');
Route::get('/sectors/{sector}/edit', [SectorController::class, 'edit'])->name('sectors.edit')->middleware('role:1,2');
Route::put('/sectors/{sector}', [SectorController::class, 'update'])->name('sectors.update')->middleware('role:1,2');
Route::delete('/sectors/{sector}', [SectorController::class, 'destroy'])->name('sectors.destroy')->middleware('role:1,2');

// specialties
// Route::resource('specialties', SpecialtieController::class);
Route::get('/specialties', [SpecialtieController::class, 'index'])->name('specialties.index');
Route::get('/specialties/create', [SpecialtieController::class, 'create'])->name('specialties.create')->middleware('role:1,2');
Route::post('/specialties', [SpecialtieController::class, 'store'])->name('specialties.store')->middleware('role:1,2');
Route::get('/specialties/{specialty}', [SpecialtieController::class, 'show'])->name('specialties.show');
Route::get('/specialties/{specialty}/edit', [SpecialtieController::class, 'edit'])->name('specialties.edit')->middleware('role:1,2');
Route::put('/specialties/{specialty}', [SpecialtieController::class, 'update'])->name('specialties.update')->middleware('role:1,2');
Route::delete('/specialties/{specialty}', [SpecialtieController::class, 'destroy'])->name('specialties.destroy')->middleware('role:1,2');

// units
// Route::resource('units', UnitController::class);
Route::get('/units', [UnitController::class, 'index'])->name('units.index');
Route::get('/units/create/{sector?}', [UnitController::class, 'create'])->name('units.create')->middleware('role:1,2');
Route::post('/units', [UnitController::class, 'store'])->name('units.store')->middleware('role:1,2');
Route::get('/units/{unit}', [UnitController::class, 'show'])->name('units.show');
Route::get('/units/{unit}/edit', [UnitController::class, 'edit'])->name('units.edit')->middleware('role:1,2');
Route::put('/units/{unit}', [UnitController::class, 'update'])->name('units.update')->middleware('role:1,2');
Route::delete('/units/{unit}', [UnitController::class, 'destroy'])->name('units.destroy')->middleware('role:1,2');

// views routers
Route::get('/uploadd', function () {       // uploadd
    return view('uploadd');
})->name('uploadd');

Route::get('/insert', function () {       // insert
    return view('insert');
})->name('insert');

Route::get('/3ddy_egmali_fraa_gonood', function () {
    return view('3ddy_egmali_fraa_gonood');
})->name('3ddy_egmali_fraa_gonood');

Route::get('/3ddy_egmali_stage', function () {
    return view('3ddy_egmali_stage');
})->name('3ddy_egmali_stage');

Route::get('/3ddy_egmali_stage_js', function () {
    return view('3ddy_egmali_stage_js');
})->name('3ddy_egmali_stage_js');

Route::get('/3ddy_emdad', function () {
    return view('3ddy_emdad');
})->name('3ddy_emdad');

Route::get('/3ddy_emdad_js', function () {
    return view('3ddy_emdad_js');
})->name('3ddy_emdad_js');

Route::get('/3ddy_f2at_drgat', function () {
    return view('3ddy_f2at_drgat');
})->name('3ddy_f2at_drgat');

Route::get('/3ddy_injured', function () {
    return view('3ddy_injured');
})->name('3ddy_injured');

Route::get('/3ddy_lewa_gonood', function () {
    return view('3ddy_lewa_gonood');
})->name('3ddy_lewa_gonood');

Route::get('/3ddy_mla7k', function () {
    return view('3ddy_mla7k');
})->name('3ddy_mla7k');

Route::get('/3ddy_mla7k_dual', function () {
    return view('3ddy_mla7k_dual');
})->name('3ddy_mla7k_dual');

Route::get('/3ddy_mla7k_js', function () {
    return view('3ddy_mla7k_js');
})->name('3ddy_mla7k_js');

Route::get('/3ddy_mla7k_total', function () {
    return view('3ddy_mla7k_total');
})->name('3ddy_mla7k_total');

Route::get('/3ddy_rotab_gonood', function () {
    return view('3ddy_rotab_gonood');
})->name('3ddy_rotab_gonood');

Route::get('/3ddy_rotab_rateb', function () {
    return view('3ddy_rotab_rateb');
})->name('3ddy_rotab_rateb');

Route::get('/Trainingcenters', function () {
    return view('Trainingcenters');
})->name('Trainingcenters');

Route::get('/Addjob', function () {
    return view('Addjob');
})->name('Addjob');

Route::get('/Viewall', function () {
    return view('Viewall');
})->name('Viewall');

Route::get('/3rdfaxat', function () {
    return view('3rdfaxat');
})->name('3rdfaxat');

Route::get('/mala7e2dakhly', function () {
    return view('mala7e2dakhly');
})->name('mala7e2dakhly');

Route::get('/mala7e25argy', function () {
    return view('mala7e25argy');
})->name('mala7e25argy');

Route::get('/2mdadyaomee', function () {
    return view('2mdadyaomee');
})->name('2mdadyaomee');

Route::get('/inside7efzsalam', function () {
    return view('inside7efzsalam');
})->name('inside7efzsalam');

Route::get('/outside7efzsalam', function () {
    return view('outside7efzsalam');
})->name('outside7efzsalam');

Route::get('/3rdwagaza', function () {
    return view('3rdwagaza');
})->name('3rdwagaza');

Route::get('/totalmala7e2', function () {
    return view('totalmala7e2');
})->name('totalmala7e2');

Route::get('/insidemal7e22', function () {
    return view('insidemal7e22');
})->name('insidemal7e22');

Route::get('/outsidemal7e22', function () {
    return view('outsidemal7e22');
})->name('outsidemal7e22');

Route::get('/3ddy7efzsalam', function () {
    return view('3ddy7efzsalam');
})->name('3ddy7efzsalam');

Route::get('/7efzsalam5areg', function () {
    return view('7efzsalam5areg');
})->name('7efzsalam5areg');

Route::get('/3ddysafr', function () {
    return view('3ddysafr');
})->name('3ddysafr');

Route::get('/3ddy3ardwagaza', function () {
    return view('3ddy3ardwagaza');
})->name('3ddy3ardwagaza');

Route::get('/2mdadyaomee', function () {
    return view('2mdadyaomee');
})->name('2mdadyaomee');

Route::get('/egmalymar7ala', function () {
    return view('egmalymar7ala');
})->name('egmalymar7ala');

Route::get('/archivefaxat', function () {
    return view('archivefaxat');
})->name('archivefaxat');

Route::get('/newfile', function () {
    return view('newfile');
})->name('newfile');

Route::get('/mawkefshary', function () {
    return view('mawkefshary');
})->name('mawkefshary');

Route::get('/moratb7arb', function () {
    return view('moratb7arb');
})->name('moratb7arb');

Route::get('/moratbeslm', function () {
    return view('moratbeslm');
})->name('moratbeslm');

Route::get('/elraftrateb3aly', function () {
    return view('elraftrateb3aly');
})->name('elraftrateb3aly');

Route::get('/elraftgnood', function () {
    return view('elraftgnood');
})->name('elraftgnood');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
