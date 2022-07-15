<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('admin', 'HomeController@admin')->name('admin');
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
Route::resource('management_team', 'ManagementTeamController');
Route::resource('about', 'AboutController');

Route::resource('language', 'LanguageController');
Route::get('set_jp', 'LanguageController@setJP')->name('set_jp');
Route::get('set_mm', 'LanguageController@setMM')->name('set_mm');
