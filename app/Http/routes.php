<?php

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Route;


Route::get('/', 'PublicController@index')->name('index');
Route::get('casco', 'PublicController@casco')->name('casco');
Route::get('osago', 'PublicController@osago')->name('osago');
Route::get('travel', 'PublicController@travel')->name('travel');
Route::get('sport', 'PublicController@sport')->name('sport');
Route::get('estate', 'PublicController@estate')->name('estate');
Route::get('property', 'PublicController@property')->name('property');
Route::get('policy', 'PublicController@policy')->name('policy');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('osagoCalc', 'PublicController@osagoCalc')->name('osagoCalc');
Route::get('osagoForm1', 'PublicController@osagoForm1')->name('osagoForm1');
Route::get('osagoForm2', 'PublicController@osagoForm2')->name('osagoForm2');
Route::get('soon', 'PublicController@soon')->name('soon');
Route::get('formYourself', 'PublicController@yourSelf')->name('formYourself');

//Route::get('formYourself', 'SoapController@formYourself')->name('formYourself');
//Route::post('formYourself', 'SoapController@formYourself')->name('select.mark');
//Route::post('formYourself','SoapController@store');

Route::get('formUpload', 'PublicController@formUpload')->name('formUpload');
Route::post('formUpload', 'PublicImageController@imageUpload')->name('formUploadDB');

//Route::get('/show-xml', ['as' => 'show', 'uses' => 'SoapController@show']);


Route::get('to', 'PublicController@to');
Route::get('help', 'PublicController@help');
Route::get('success', 'PublicController@success');

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

Route::post('o/osago', 'OrdersController@postOsago');
Route::post('o/osago1', 'OrdersController@postOsago1');
Route::post('o/osago2', 'OrdersController@postOsago2');
Route::post('o/osago3', 'OrdersController@postOsago3');
Route::post('o/msg', 'OrdersController@sendMessage');
Route::post('o/kasko', 'OrdersController@postKasko');
Route::post('o/kasko1', 'OrdersController@postKasko1');
Route::post('o/travel1', 'OrdersController@postTravel');
Route::post('o/travel2', 'OrdersController@postTravel2');
Route::post('o/estate', 'OrdersController@postEstate');
Route::post('o/to', 'OrdersController@postTo');


Route::group(['middleware' => 'auth','prefix' => 'online'], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::get('orders/invoice/{id}', 'OrdersController@pdf')->name('pdf.download');

    Route::any('policies/data', 'PoliciesController@anyData');
    Route::resource('policies', 'PoliciesController');
    Route::get('policies/{id}/export', 'PoliciesController@export');
    Route::post('policies/{id}/exclude', 'PoliciesController@exclude');

    Route::post('sms/send', 'SmsController@send');

    Route::post('images/upload', 'ImagesController@postUpload');
    Route::post('images/delete', 'ImagesController@postDelete');

    Route::post('files/upload', 'FilesController@postUpload');
    Route::post('files/delete', 'FilesController@postDelete');
    Route::get('files/{filename}', 'FilesController@getDownload');

    Route::get('images/{filename}', function ($filename) {
        return Image::make(Config::get('images.full_size') . $filename)->response();
    });

    Route::get('reports/bordero', 'ReportsController@getBordero');
    Route::post('reports/bordero', 'ReportsController@postBordero');
    Route::get('reports/orders', 'ReportsController@getOrders');
    Route::post('reports/orders', 'ReportsController@postOrders');
    Route::get('clients/{id}/view', 'ClientsController@view');

    Route::get('p/import', 'PolicyImportController@getImport');
    Route::get('p/importXls', 'PolicyImportController@getImportXls');
    Route::post('p/import', 'PolicyImportController@postImport');
    Route::post('p/importXls', 'PolicyImportController@postImportXls');

    Route::any('orders/data', 'OrdersController@anyData');
    Route::get('orders/pdf', 'OrdersController@createFromPdf');
    Route::post('orders/pdfSave', 'OrdersController@uploadStore');
    Route::resource('orders', 'OrdersController');

});