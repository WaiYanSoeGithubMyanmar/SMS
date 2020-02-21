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


/**
 * HRM  DESIGNATION
 */
Route::get('designations', 'DesignationController@index');
Route::group(['prefix' => 'designation'], function () {
    Route::post('store', 'DesignationController@store');
    Route::get('edit/{id}', 'DesignationController@edit');
    Route::post('update/{id}', 'DesignationController@update');
    Route::delete('delete/{id}', 'DesignationController@delete');
    Route::get('search/{data}', 'DesignationController@search');
});

/**
 * HRM  DEPARTMENT
 */
Route::get('departments', 'DepartmentController@index');
Route::group(['prefix' => 'department'], function () {
    Route::post('store', 'DepartmentController@store');
    Route::get('edit/{id}', 'DepartmentController@edit');
    Route::post('update/{id}', 'DepartmentController@update');
    Route::delete('delete/{id}', 'DepartmentController@delete');
    Route::get('search/{data}', 'DepartmentController@search');
});



/**
 * Roles Permissions
 */
Route::get('roles', 'RoleController@index');
Route::group(['prefix' => 'role'], function () {
    Route::post('store', 'RoleController@store');
    Route::get('edit/{id}', 'RoleController@edit');
    Route::post('update/{id}', 'RoleController@update');
    Route::delete('delete/{id}', 'RoleController@delete');
    Route::get('search/{data}', 'RoleController@search');
});

/**
 * Staff Directory
 */
Route::get('staffs', 'StaffDirectoryController@index');
Route::group(['prefix' => 'staffdirectory'], function () {
    Route::post('store', 'StaffDirectoryController@store');
    Route::get('edit/{id}', 'StaffDirectoryController@edit');
    Route::post('update/{id}', 'StaffDirectoryController@update');
    Route::delete('delete/{id}', 'StaffDirectoryController@delete');
    Route::get('search/{data}', 'StaffDirectoryController@search');
    Route::get('search_by_role/{id}', 'StaffDirectoryController@search_by_role');
    Route::get('search_by_other/{id}', 'StaffDirectoryController@search_by_other');
});

/**
 * Assign Permissions
 */
Route::get('features', 'ActivityController@index');

/***
 * End Code of Wai Yan Soe
 */

//  Wai Yan Moung
// ---------------------------------------------- Wai Yan Moung ------------------------------------------------
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
Route::get('student','StudentController@index');
Route::group(['prefix' => 'student'], function() {
    Route::post('add','StudentController@store');
    Route::get('show/{para}','StudentController@show');
    Route::get('edit/{id}','StudentController@edit');
    Route::post('update/{id}','StudentController@update');
    Route::delete('delete/{id}','StudentController@destroy');
    Route::get('section/{para}','StudentController@section');
    Route::get('class_section/{class_id}/{section_id}','StudentController@classSection');
    Route::get('sibling/{id}','StudentController@selectStudent');
    Route::get('siblings/{id}','StudentController@selectSibling');
    Route::get('rooms/{id}','StudentController@selectHostel');
});
Route::get('studentsibling', 'StudentSiblingController@index');
Route::group(['prefix' => 'studentsiblings'], function () {
    Route::post('add', 'StudentSiblingController@store');
    Route::get('show/{para}', 'StudentSiblingController@show');
    Route::get('edit/{id}', 'StudentSiblingController@edit');
    Route::post('update/{id}', 'StudentSiblingController@update');
    Route::delete('delete/{id}', 'StudentSiblingController@destroy');
});
Route::get('session', 'StudentSessionController@index');
Route::group(['prefix' => 'sessions'], function () {
    Route::post('add', 'StudentSessionController@store');
    Route::get('show/{para}', 'StudentSessionController@show');
    Route::get('edit/{id}', 'StudentSessionController@edit');
    Route::post('update/{id}', 'StudentSessionController@update');
    Route::delete('delete/{id}', 'StudentSessionController@destroy');
});
Route::get('uploaddocument', 'StudentDocumentController@index');
Route::group(['prefix' => 'uploaddocuments'], function () {
    Route::post('add', 'StudentDocumentController@store');
    Route::get('show/{para}', 'StudentDocumentController@show');
    Route::get('edit/{id}', 'StudentDocumentController@edit');
    Route::post('update/{id}', 'StudentDocumentController@update');
    Route::delete('delete/{id}', 'StudentDocumentController@destroy');
});
// end of wai yan moung -------------------------------------------------------------------

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

//Vehicle Route  Route
Route::get('vehicleroute', 'VehicleRoutesController@index');
Route::group(['prefix' => 'VehicleRoute'], function() {
    Route::post('save','VehicleRoutesController@store');
    Route::get('edit/{id}','VehicleRoutesController@edit');
    Route::get('delete/{id}','VehicleRoutesController@destroy');
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

//Assign Class Teacher Route
Route::get('classTeacher', 'AssignclassteacherController@index');
Route::group(['prefix' => 'ClassTeacher'], function() {
    Route::post('save','AssignclassteacherController@store');
    Route::get('edit/{id}','AssignclassteacherController@edit');
    Route::get('delete/{id}','AssignclassteacherController@destroy');
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
Route::get('getClasses', 'ClassesController@Theinindex');
Route::get('getSection', 'SectionController@index');
Route::get('getClassSectionId/{arrayids}','ClassSectionController@getAssignSub_id');
Route::get('getClassSection/{id}', 'ClassSectionController@Theinindex');
Route::get('searchExamSchadule/{arrayClassSectionExam}', 'ExamSchaduleController@index');
Route::get('getSubjects', 'SubjectController@index');
// End Thei Htike Aung Section
