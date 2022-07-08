<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entryOfficerController;
use App\Http\Controllers\managerController;
/* use App\Http\Controllers\StudentAffairController; */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'adminController@login');
Route::post('admin/dologin', 'adminController@dologin');
Route::get('admin/register', 'adminController@register');


Route::group(['middleware' => 'AdminLogin'], function () {
    
    Route::get('adminHome', 'adminController@Adminhome');
    //---------------------------Accounts-------------------
    Route::get('admin/logout', 'adminController@logout');
    Route::post('admin/store/accounts', 'adminController@storeAccounts');
    //------Accounts-----------
    Route::get('admin/index/staff', 'adminController@adminindexAccou');
    Route::get('admin/show/staff/{id}', 'adminController@showadminAccou');
    Route::delete('admin/delete/accou/{id}', 'adminController@destroy_admin'); //
    //-----------------
    Route::get('affair/index/staff', 'adminController@affairindexAccou');
    Route::get('affair/show/staff/{id}', 'adminController@showaffairAccou');
    Route::delete('affair/delete/accou/{id}', 'adminController@destroy_affair'); //
    //-----------------
    Route::get('entry/officer/index/staff', 'adminController@entryindexAccou');
    Route::get('entry/show/staff/{id}', 'adminController@showentryAccou');
    Route::delete('entry/delete/accou/{id}', 'adminController@destroy_entry'); //
    //------------------
    Route::get('doctor/index/staff', 'adminController@doctorindexAccou');
    Route::get('doctor/show/staff/{id}', 'adminController@showdoctorAccou');
    Route::delete('doctor/delete/accou/{id}', 'adminController@destroy_doctor'); //
    //-------------------
    Route::get('manager/index/staff', 'adminController@managerindexAccou');
    Route::get('manager/show/staff/{id}', 'adminController@showamanagerAccou');
    Route::delete('manager/delete/accou/{id}', 'adminController@destroy_manager'); //
    //------------------
    Route::get('specialist/index/staff', 'adminController@specialistindexAccou');
    Route::get('specialist/show/staff/{id}', 'adminController@showspecialistAccou');
    Route::delete('specialist/delete/accou/{id}', 'adminController@destroy_specialist');
    //----------------

    //--------------------------End Accounts------------------------------


    //---------------------------Year----------------------------------------
    Route::get('admin/index/year', 'adminController@index_year');
    Route::get('admin/create/year', 'adminController@create_year');
    Route::post('admin/store/year', 'adminController@store_year');
    Route::get('admin/edit/year/{id}', 'adminController@edit_year');
    Route::post('admin/update/year', 'adminController@update_year');
    Route::delete('admin/delete/year/{id}', 'adminController@destroy_year');
    //--------------------------End Year-------------------------------------


    //---------------------------Education Level-------------------------
    Route::get('admin/index/level', 'adminController@index_level');
    Route::get('admin/create/level', 'adminController@create_level');
    Route::post('admin/store/level', 'adminController@store_level');
    Route::get('admin/edit/level/{id}', 'adminController@edit_level');
    Route::post('admin/update/level', 'adminController@update_level');
    Route::delete('admin/delete/level/{id}', 'adminController@destroy_level');


    //--------------------------end Education level--------------------------

    //---------------------------start Sublevel-----------------------------
    Route::get('admin/index/sublevel', 'adminController@index_sublevel');
    Route::get('admin/create/sublevel', 'adminController@create_sublevel');
    Route::post('admin/store/sublevel', 'adminController@store_sublevel');
    Route::get('admin/edit/sublevel/{id}', 'adminController@edit_sublevel');
    Route::post('admin/update/sublevel', 'adminController@update_sublevel');
    Route::delete('admin/delete/sublevel/{id}', 'adminController@destroy_sublevel');
    //----------------------------End sublevel----------------------------------


    //-------------------------------Start Nationality---------------------------
    Route::get('admin/index/nationality', 'adminController@index_nationality');
    Route::get('admin/create/nationality', 'adminController@create_nationality');
    Route::post('admin/store/nationality', 'adminController@store_nationality');
    Route::get('admin/edit/nationality/{id}', 'adminController@edit_nationality');
    Route::post('admin/update/nationality', 'adminController@update_nationality');
    Route::delete('admin/delete/nationality/{id}', 'adminController@destroy_nationality');
    // -------------------------------End Nationality----------------------------

    //--------------------------------Start Course------------------------------
    Route::get('admin/index/course', 'adminController@index_course');
    Route::get('admin/create/course', 'adminController@create_course');
    Route::post('admin/store/course', 'adminController@store_course');
    Route::get('admin/edit/course/{id}', 'adminController@edit_course');
    Route::post('admin/update/course', 'adminController@update_course');
    Route::delete('admin/delete/course/{id}', 'adminController@destroy_course');
    //---------------------------------End Course-----------------------------
    //---------------------------governorate----------------------------------------
    Route::get('admin/index/governorate', 'adminController@index_governorate');
    Route::get('admin/create/governorate', 'adminController@create_governorate');
    Route::post('admin/store/governorate', 'adminController@store_governorate');
    Route::get('admin/edit/governorate/{id}', 'adminController@edit_governorate');
    Route::post('admin/update/governorate', 'adminController@update_governorate');
    Route::delete('admin/delete/governorate/{id}', 'adminController@destroy_governorate');
    //--------------------------End governorate-------------------------------------

    //---------------------------Town----------------------------------------
    Route::get('admin/index/town', 'adminController@index_town');
    Route::get('admin/create/town', 'adminController@create_town');
    Route::post('admin/store/town', 'adminController@store_town');
    Route::get('admin/edit/town/{id}', 'adminController@edit_town');
    Route::post('admin/update/town', 'adminController@update_town');
    Route::delete('admin/delete/town/{id}', 'adminController@destroy_town');
    //--------------------------End Town-------------------------------------

    //---------------------------District----------------------------------------
    Route::get('admin/index/district', 'adminController@index_district');
    Route::get('admin/create/district', 'adminController@create_district');
    Route::post('admin/store/district', 'adminController@store_district');
    Route::get('admin/edit/district/{id}', 'adminController@edit_district');
    Route::post('admin/update/district', 'adminController@update_district');
    Route::delete('admin/delete/district/{id}', 'adminController@destroy_district');
    //--------------------------End district-------------------------------------

});


//-------------------------StudentAffairs--------------------------
Route::get('affair/login', 'StudentAffairController@login');
Route::post('affair/dologin','StudentAffairController@dologin');
Route::group(['middleware'=>'AffairLogin'], function(){
    Route::get('affair/logout', 'StudentAffairController@logout');
    Route::get('affair/home', 'StudentAffairController@affairHome');
    Route::get('affair/index', 'StudentAffairController@index');
    Route::get('affair/create', 'studentAffairController@create');
    Route::post('affair/store', 'studentAffairController@store');
    Route::get('affair/edit/{id}','studentAffairController@edit');
    Route::post('affair/update','studentAffairController@update');
    Route::delete('affair/delete/{studentSsn}','studentAffairController@destroy');
    Route::get('affair/show/{StudentSsn}','studentAffairController@show');
    Route::get('affair/index/one', 'studentAffairController@f1');
    Route::get('affair/index/two', 'studentAffairController@f2');
    Route::get('affair/index/three', 'studentAffairController@f3');
    Route::get('affair/index/four', 'studentAffairController@f4');
    Route::get('affair/index/five', 'studentAffairController@f5');
    Route::get('affair/index/sex', 'studentAffairController@f6');
    Route::get('affair/index/seven', 'studentAffairController@f7');
    Route::get('affair/index/eight', 'studentAffairController@f8');
    Route::get('affair/index/nine', 'studentAffairController@f9');
    Route::get('affair/index/ten', 'studentAffairController@f10');
    Route::get('affair/index/eleven', 'studentAffairController@f11');
    Route::get('affair/index/twelve', 'studentAffairController@f12');
    
    

});
//--------------------------- End StudentAffair------------------------------------

//-------------------------Doctor--------------------------

    Route::get('doctor/login', 'DoctorController@login');
    Route::post('doctor/dologin', 'DoctorController@dologin');
    Route::group(['middleware'=>'DoctorLogin'], function(){

    Route::get('doctor/logout', 'DoctorController@logout');
    Route::get('doctorHome', 'DoctorController@doctorhome');
    Route::get('doctor/index', 'DoctorController@index');
    Route::get('doctor/edit/{id}', 'DoctorController@edit');
    Route::post('doctor/update', 'DoctorController@update');
    Route::delete('doctor/delete/{id}', 'DoctorController@destroy');
    Route::get('doctor/show/{StudentSsn}', 'DoctorController@show');
    Route::get('doctor/count', 'DoctorController@count1');
    Route::get('doctor/index/one', 'DoctorController@d1');
    Route::get('doctor/index/two', 'DoctorController@d2');
    Route::get('doctor/index/three', 'DoctorController@d3');
    Route::get('doctor/index/four', 'DoctorController@d4');
    Route::get('doctor/index/five', 'DoctorController@d5');
    Route::get('doctor/index/sex', 'DoctorController@d6');
    Route::get('doctor/index/seven', 'DoctorController@d7');
    Route::get('doctor/index/eight', 'DoctorController@d8');
    Route::get('doctor/index/nine', 'DoctorController@d9');
    Route::get('doctor/index/ten', 'DoctorController@d10');
    Route::get('doctor/index/eleven', 'DoctorController@d11');
    Route::get('doctor/index/twelve', 'DoctorController@d12');
});
//--------------------------- End Doctor------------------------------------


//-------------------------entry officer--------------------------
Route::get('entry/login', 'entryOfficerController@login');
Route::post('entry/dologin', 'entryOfficerController@dologin');

Route::group(['middleware'=>'OfficerLogin'],function(){
Route::get('entry/logout', 'entryOfficerController@logout');

Route::get('entry/home', [entryOfficerController::class, 'entry'])->name('entry.home');
Route::get('entry/levels/{id}', [entryOfficerController::class, 'l1'])->name('e.l1');

//-------------------------matrials First term-----------------------------------
Route::get('entry/matrialsF/{id}', [entryOfficerController::class, 'matrialsF'])->name('e.matrialsF');
Route::post('entry/gradesF/{id}', action: [entryOfficerController::class, 'gradesF'])->name('e.gradesF');

//-------------------------matrials second term----------------------------------
Route::get('entry/matrialsS/{id}', [entryOfficerController::class, 'matrialsS'])->name('e.matrialsS');
Route::post('entry/gradesS/{id}', action: [entryOfficerController::class, 'gradesS'])->name('e.gradesS');


//-------------------------behavior First term--------------------------
Route::get('entry/behaviorF/{id}', [entryOfficerController::class, 'behaviorF'])->name('e.behaviorF');
Route::post('entry/behaviorF1/{id}', action: [entryOfficerController::class, 'behaviorF1'])->name('e.behaviorF1');
Route::post('entry/searchF/{id}', action: [entryOfficerController::class, 'searchF'])->name('e.searchF');

//-------------------------behavior second term--------------------------
Route::get('entry/behaviorS/{id}', [entryOfficerController::class, 'behaviorS'])->name('e.behaviorS');
Route::post('entry/behaviorS1/{id}', action: [entryOfficerController::class, 'behaviorS1'])->name('e.behaviorS1');
Route::post('entry/searchS/{id}', action: [entryOfficerController::class, 'searchS'])->name('e.searchS');


});
//-------------------------end entry officer--------------------------








//-------------------------manager--------------------------

Route::get('manager/educationStageReport/{id}', [managerController::class, 'r'])->name('ESR');
Route::get('manager/levels/one', [managerController::class, 'l1'])->name('m.l1');
Route::get('manager/levels/two', [managerController::class, 'l2']);
Route::get('manager/levels/three', [managerController::class, 'l3']);
Route::get('manager/levels/four', [managerController::class, 'l4']);
Route::get('manager/levels/five', [managerController::class, 'l5']);
Route::get('manager/levels/sex', [managerController::class, 'l6']);
Route::get('manager/levels/seven', [managerController::class, 'l7']);
Route::get('manager/levels/eight', [managerController::class, 'l8']);
Route::get('manager/levels/nine', [managerController::class, 'l9']);
Route::get('manager/levels/ten', [managerController::class, 'l10']);
Route::get('manager/levels/eleven', [managerController::class, 'l11']);
Route::get('manager/levels/twelve', [managerController::class, 'l12']);

//----------------------------------------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
