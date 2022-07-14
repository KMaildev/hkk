<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::resource('contact', 'ContactController');
Route::resource('gallery', 'GalleryController');
Route::resource('blog', 'BlogController');
Route::resource('faq', 'FaqController');
Route::resource('employer', 'EmployerController');
Route::resource('cv', 'CvController');
Route::resource('jobs', 'JobsController');
Route::resource('milestones', 'MilestonesController');
Route::resource('recruitment', 'RecruitmentController');
Route::resource('training', 'TrainingController');
Route::resource('statement', 'CompanyStatementController');
Route::resource('organization', 'OrganizationChartController');
Route::resource('partners', 'PartnersController');
