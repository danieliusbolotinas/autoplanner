<?php

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

Route::get('/', 'mediaTypeSelectionController@index')->name('mediaSelection');
Route::get('/briefSelection', 'briefSelectionController@index')->name('briefSelection');
Route::get('/brief', 'briefController@index')->name('brief');
Route::get('/createFlowchart', 'briefController@create')->name('flowchart');
Route::get('/channelPicker', 'channelPickerController@index')->name('channelPicker');


/*upload and download excel/scv files*/

Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'fileController@importExportExcelORCSV'));
Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'fileController@importFileIntoDB'));
Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'fileController@downloadExcelFile'));
