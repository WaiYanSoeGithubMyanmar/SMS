<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Thein Gyi
Route::get('ExamList', 'ExamsController@index');
Route::group(['prefix' => 'exams'], function () {
    Route::post('addexam', 'ExamsController@store');
    Route::get('editexam/{id}', 'ExamsController@edit');
    Route::get('deleteexam/{id}', 'ExamsController@destroy');
});
Route::get('activeacademicyr', 'AcademicYearController@activeAcademic');

/***
 * Wai Yan Soe
 */

/**
 * Hostel
 */
Route::get('hostels', 'HostelController@index');
Route::group(['prefix' => 'hostel'], function () {
    Route::post('store', 'HostelController@store');
    Route::get('edit/{id}', 'HostelController@edit');
    Route::post('update/{id}', 'HostelController@update');
    Route::delete('delete/{id}', 'HostelController@delete');
    Route::get('search/{data}', 'HostelController@search');
});

/**
 * ROOM TYPE
 */
Route::get('roomtypes', 'RoomTypeController@index');
Route::group(['prefix' => 'roomtype'], function () {
    Route::post('store', 'RoomTypeController@store');
    Route::get('edit/{id}', 'RoomTypeController@edit');
    Route::post('update/{id}', 'RoomTypeController@update');
    Route::delete('delete/{id}', 'RoomTypeController@delete');
    Route::get('search/{data}', 'RoomTypeController@search');
});


/**
 * HOSTEL ROOM
 */
Route::get('hostelrooms', 'HostelRoomController@index');
Route::group(['prefix' => 'hostelroom'], function () {
    Route::post('store', 'HostelRoomController@store');
    Route::get('edit/{id}', 'HostelRoomController@edit');
    Route::post('update/{id}', 'HostelRoomController@update');
    Route::delete('delete/{id}', 'HostelRoomController@delete');
    Route::get('search/{data}', 'HostelRoomController@search');
});
/***
 * End Code of Wai Yan Soe
 */

//  Wai Yan Moung
Route::get('attendancetypes', 'AttendanceTypeController@index');
Route::group(['prefix' => 'attendancetype'], function () {
    Route::post('add', 'AttendanceTypeController@store');
    Route::get('edit/{id}', 'AttendanceTypeController@edit');
    Route::post('update/{id}', 'AttendanceTypeController@update');
    Route::delete('delete/{id}', 'AttendanceTypeController@destroy');
});
Route::get('studentattendances', 'StudentAttendancesController@index');
Route::group(['prefix' => 'studentattendance'], function () {
    Route::post('add', 'StudentAttendancesController@store');
    Route::get('show/{para}', 'StudentAttendancesController@show');
    Route::get('edit/{id}', 'StudentAttendancesController@edit');
    Route::post('update/{id}', 'StudentAttendancesController@update');
    Route::delete('delete/{id}', 'StudentAttendancesController@destroy');
});

// Kyaw Soe Hein
Route::get('tranRouteList', 'RouteController@index');
Route::group(['prefix' => 'TranRoute'], function () {
    Route::post('save', 'RouteController@store');
    Route::get('edit/{id}', 'RouteController@edit');
    Route::get('delete/{id}', 'RouteController@destroy');
});

Route::get('tranVehicleList', 'VehicleController@index');
Route::group(['prefix' => 'TranVehicle'], function () {
    Route::post('save', 'VehicleController@store');
    Route::get('edit/{id}', 'VehicleController@edit');
    Route::get('delete/{id}', 'VehicleController@destroy');
});

//Lwin Kyaw Phyo
//Academic Year Route
Route::get('academicyr', 'AcademicYearController@index');
Route::group(['prefix' => 'AcademicYear'], function() {
    Route::post('save','AcademicYearController@store');
    Route::get('edit/{id}','AcademicYearController@edit');
    Route::get('delete/{id}','AcademicYearController@destroy');
});

//Section Route
Route::get('section', 'SectionController@index');
Route::group(['prefix' => 'Section'], function() {
    Route::post('save','SectionController@store');
    Route::get('edit/{id}','SectionController@edit');
    Route::get('delete/{id}','SectionController@destroy');
});

//Class Route
Route::get('class', 'ClassesController@index');
Route::group(['prefix' => 'Class'], function() {
    Route::post('save','ClassesController@store');
    Route::get('edit/{id}','ClassesController@edit');
    Route::get('delete/{id}','ClassesController@destroy');
});

//Subject Route
Route::get('subject', 'SubjectController@index');
Route::group(['prefix' => 'Subject'], function() {
    Route::post('save','SubjectController@store');
    Route::get('edit/{id}','SubjectController@edit');
    Route::get('delete/{id}','SubjectController@destroy');
});
//Lwin Kyaw Phyo

//Thein Htike Aung
Route::get('ExamList','ExamsController@index');
Route::get('ExamTest','ExamsController@getAcademicActiveId');
Route::group(['prefix' => 'exams'], function() {
    Route::post('addexam','ExamsController@store');
    Route::get('editexam/{id}','ExamsController@edit');
    Route::get('deleteexam/{id}','ExamsController@destroy');
});
Route::group(['prefix' => 'examSchadules'], function() {
    Route::post('addExamSchadule','ExamSchaduleController@store');
    Route::get('getExamData/{gettingArrays}','ExamSchaduleController@getExamData');
    Route::get('getClassName/{id}','ExamSchaduleController@getClassName');
    Route::get('getSectionName/{id}','ExamSchaduleController@getSectionName');

});
Route::get('activeacademicyr', 'AcademicYearController@activeAcademic');
Route::get('activeAcademicValue','AcademicYearController@activeAcademicValue');
Route::get('getClasses', 'ClassesController@index');
Route::get('getSection', 'SectionController@index');
Route::get('getClassSectionId/{arrayids}','ClassSectionController@getAssignSub_id');
Route::get('getClassSection/{id}', 'ClassSectionController@index');
Route::get('searchExamSchadule/{arrayClassSectionExam}', 'ExamSchaduleController@index');
Route::get('getSubjects', 'SubjectController@index');
// End Thei Htike Aung Section