<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['PublicMiddleware']], function () {

});

Route::group(['middleware' => ['web']], function () {


    Route::get('/','WelcomeController@index');
    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

Route::auth();

// Job Categories Route
Route::group(['prefix' => 'categories','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allCategory' , 'uses' => 'CategoryController@index']);
    Route::get('add', ['as' => 'addCategory', 'uses' => 'CategoryController@create']);
    Route::get('edit/{id}', ['as' => 'editCategory', 'uses' => 'CategoryController@edit']);
    Route::post('save', ['as' => 'saveCategory', 'uses' => 'CategoryController@store']);
    Route::put('update', ['as' => 'updateCategory', 'uses' => 'CategoryController@update']);
    Route::get('delete/{id}', ['as' => 'deleteCategory', 'uses' => 'CategoryController@destroy']);

});

// Job Degrees Route
Route::group(['prefix' => 'degrees','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allDegree' , 'uses' => 'DegreeController@index']);
    Route::get('add', ['as' => 'addDegree', 'uses' => 'DegreeController@create']);
    Route::get('edit/{id}', ['as' => 'editDegree', 'uses' => 'DegreeController@edit']);
    Route::post('save', ['as' => 'saveDegree', 'uses' => 'DegreeController@store']);
    Route::put('update', ['as' => 'updateDegree', 'uses' => 'DegreeController@update']);
    Route::get('delete/{id}', ['as' => 'deleteDegree', 'uses' => 'DegreeController@destroy']);

});


// Profiles Cover Letter Route
Route::group(['prefix' => 'about','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allCoverLetter' , 'uses' => 'CoverLetterController@index']);
    Route::get('add', ['as' => 'addCoverLetter', 'uses' => 'CoverLetterController@create']);
    Route::get('edit/{id}', ['as' => 'editCoverLetter', 'uses' => 'CoverLetterController@edit']);
    Route::post('save', ['as' => 'saveCoverLetter', 'uses' => 'CoverLetterController@store']);
    Route::put('update', ['as' => 'updateCoverLetter', 'uses' => 'CoverLetterController@update']);
    Route::get('delete/{id}', ['as' => 'deleteCoverLetter', 'uses' => 'CoverLetterController@destroy']);

});

// Profiles Institue Route
Route::group(['prefix' => 'institutes','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allInstitute' , 'uses' => 'InstituteController@index']);
    Route::get('add', ['as' => 'addInstitute', 'uses' => 'InstituteController@create']);
    Route::get('edit/{id}', ['as' => 'editInstitute', 'uses' => 'InstituteController@edit']);
    Route::post('save', ['as' => 'saveInstitute', 'uses' => 'InstituteController@store']);
    Route::put('update', ['as' => 'updateInstitute', 'uses' => 'InstituteController@update']);
    Route::get('delete/{id}', ['as' => 'deleteInstitute', 'uses' => 'InstituteController@destroy']);

});

// Employer Route
Route::group(['prefix' => 'employers','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allEmployer' , 'uses' => 'EmployerController@index']);
    Route::get('add', ['as' => 'addEmployer', 'uses' => 'EmployerController@create']);
    Route::get('edit/{id}', ['as' => 'editEmployer', 'uses' => 'EmployerController@edit']);
    Route::post('save', ['as' => 'saveEmployer', 'uses' => 'EmployerController@store']);
    Route::put('update', ['as' => 'updateEmployer', 'uses' => 'EmployerController@update']);
    Route::get('delete/{id}', ['as' => 'deleteEmployer', 'uses' => 'EmployerController@destroy']);

});

// Job Skills Route
Route::group(['prefix' => 'skills','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allSkill' , 'uses' => 'SkillController@index']);
    Route::get('add', ['as' => 'addSkill', 'uses' => 'SkillController@create']);
    Route::get('edit/{id}', ['as' => 'editSkill', 'uses' => 'SkillController@edit']);
    Route::post('save', ['as' => 'saveSkill', 'uses' => 'SkillController@store']);
    Route::put('update', ['as' => 'updateSkill', 'uses' => 'SkillController@update']);
    Route::get('delete/{id}', ['as' => 'deleteSkill', 'uses' => 'SkillController@destroy']);

});


// Jobseeker Profiles Route
Route::group(['prefix' => 'profiles','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allProfile' , 'uses' => 'ProfileController@index']);
    Route::get('add', ['as' => 'addProfile', 'uses' => 'ProfileController@create']);
    Route::get('edit/{id}', ['as' => 'editProfile', 'uses' => 'ProfileController@edit']);
    Route::post('save', ['as' => 'saveProfile', 'uses' => 'ProfileController@store']);
    Route::put('update', ['as' => 'updateProfile', 'uses' => 'ProfileController@update']);
    Route::get('delete/{id}', ['as' => 'deleteProfile', 'uses' => 'ProfileController@destroy']);

});

// Jobseeker Profiles Education Route



// Jobs Company Route
Route::group(['prefix' => 'companies','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allCompany' , 'uses' => 'CompanyController@index']);
    Route::get('add', ['as' => 'addCompany', 'uses' => 'CompanyController@create']);
    Route::get('edit/{id}', ['as' => 'editCompany', 'uses' => 'CompanyController@edit']);
    Route::post('save', ['as' => 'saveCompany', 'uses' => 'CompanyController@store']);
    Route::put('update', ['as' => 'updateCompany', 'uses' => 'CompanyController@update']);
    Route::get('delete/{id}', ['as' => 'deleteCompany', 'uses' => 'CompanyController@destroy']);

});

// Jobs Route
Route::group(['prefix' => 'jobs','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allJob' , 'uses' => 'JobController@index']);
    Route::get('add', ['as' => 'addJob', 'uses' => 'JobController@create']);
    Route::get('edit/{id}', ['as' => 'editJob', 'uses' => 'JobController@edit']);
    Route::post('save', ['as' => 'saveJob', 'uses' => 'JobController@store']);
    Route::put('update', ['as' => 'updateJob', 'uses' => 'JobController@update']);
    Route::get('delete/{id}', ['as' => 'deleteJob', 'uses' => 'JobController@destroy']);

});

// Jobs Route
Route::group(['prefix' => 'applicants','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allApplicant' , 'uses' => 'ApplicantController@index']);
    Route::get('add', ['as' => 'addApplicant', 'uses' => 'ApplicantController@create']);
    Route::get('edit/{id}', ['as' => 'editApplicant', 'uses' => 'ApplicantController@edit']);
    Route::post('save', ['as' => 'saveApplicant', 'uses' => 'ApplicantController@store']);
    Route::put('update', ['as' => 'updateApplicant', 'uses' => 'ApplicantController@update']);
    Route::get('delete/{id}', ['as' => 'deleteApplicant', 'uses' => 'ApplicantController@destroy']);
});

// User roles Route
Route::group(['prefix' => 'roles','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allRole', 'uses' => 'RoleController@index']);
    Route::get('add', ['as' => 'addRole', 'uses' => 'RoleController@create']);
    Route::get('edit/{id}', ['as' => 'editRole', 'uses' => 'RoleController@edit']);
    Route::post('save', ['as' => 'saveRole', 'uses' => 'RoleController@store']);
    Route::get('update', ['as' => 'updateRole', 'uses' => 'RoleController@update']);
    Route::get('delete/{id}', ['as' => 'deleteRole', 'uses' => 'RoleController@destroy']);

});

// User Permission


// User Route
Route::group(['prefix' => 'users','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allUser', 'uses' => 'UserController@index']);
    Route::get('add', ['as' => 'addUser', 'uses' => 'UserController@create']);
    Route::get('edit/{id}', ['as' => 'editUser', 'uses' => 'UserController@edit']);
    Route::post('save', ['as' => 'saveUser', 'uses' => 'UserController@store']);
    Route::get('update', ['as' => 'updateUser', 'uses' => 'UserController@update']);
    Route::get('delete/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@destroy']);
    Route::get('deactive/{id}', ['as' => 'deactiveUser', 'uses' => 'UserController@destroy']);
    Route::get('active/{id}', ['as' => 'activeUser', 'uses' => 'UserController@destroy']);

});

Route::get('permissions','ActionController@index');
Route::post('permissions/add',['as'=>'permissions.add','uses'=>'PermissionController@store']);

Route::group(['prefix' => 'actions','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allAction', 'uses' => 'ActionController@index']);
    Route::get('add', ['as' => 'addAction', 'uses' => 'ActionController@create']);
    Route::get('edit/{id}', ['as' => 'editAction', 'uses' => 'ActionController@edit']);
    Route::post('save', ['as' => 'saveAction', 'uses' => 'ActionController@store']);
    Route::get('update', ['as' => 'updateAction', 'uses' => 'ActionController@update']);
    Route::get('delete/{id}', ['as' => 'deleteAction', 'uses' => 'ActionController@destroy']);

});


Route::get('/details', 'JobDetailsController@index');
Route::get('/home', 'HomeController@index');
Route::get('/cat', 'CategoryController@index');

});


