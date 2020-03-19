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
// use App\Http\Controllers\CustomerController;

use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('app.welcome');
});

Route::auth();

//เเดชบอร์ด
Route::get('/dashboard','DashboardController@index')->name('dbIndex');

// Rotue ออเดอร์
Route::get('/order','OrderController@index')->name('orderIndex');
Route::any('/order/{id}/edit','OrderController@edit')->name('orderEdit');

// Route ลูกค้า
Route::get('/customer','CustomerController@index')->name('customerIndex');
Route::get('/customer/create','CustomerController@create')->name('customerCreate');
Route::post('/customer/insertData','CustomerController@insertData')->name('customerInsertData');
Route::get('/customer/delete/{id}','CustomerController@delete')->name('customerDelete');
Route::get('/customer/edit/{id}','CustomerController@edit')->name('customerEdit');
Route::post('/customer/UpdateData','CustomerController@UpdateData')->name('customerUpdateData');

// Route แบบสำหรับ
Route::get('/foruse','ForuseController@index')->name('foruseIndex');
Route::get('/foruse/create','ForuseController@create')->name('foruseCreate');
Route::post('/foruse/insertData','ForuseController@insertData')->name('foruseInsertData');
Route::get('/foruse/delete/{id}','ForuseController@delete')->name('foruseDelete');
Route::get('/foruse/edit/{id}','ForuseController@edit')->name('foruseEdit');
Route::get('/foruse/UpdateData','ForuseController@UpdateData')->name('focusUpdate');

// Route แบบการผลิต
Route::get('form','FormController@index')->name('formIndex');
Route::get('form/create','FormController@create')->name('formCreate');
Route::post('form/insertData','FormController@insertData')->name('formInsertData');
Route::get('form/delete/{id}','FormController@delete')->name('formDelete');
Route::get('form/edit/{id}','FormController@edit')->name('formEdit');
Route::get('/form/UpdataData','FormController@UpdateData')->name('formUpdate');

// Route แบบทรง
Route::get('shape','ShapeController@index')->name('shapeIndex');
Route::get('shape/create','ShapeController@create')->name('shapeCreate');
Route::post('shape/insertData','ShapeController@insertData')->name('shapeInsertData');
Route::get('shape/delete/{id}','ShapeController@delete')->name('shapeDelete');
Route::get('shape/edit/{id}','ShapeController@edit')->name('shapeEdit');
Route::get('/shape/UpdataData','ShapeController@UpdateData')->name('shapeUpdate');


// Check Connection
Route::get('check-connect',function(){
    if(DB::connection()->getDatabaseName())
    {
    return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }else{
    return 'Connection False !!';
    }
    
});

//ScanQRCode
Route::get('ScanQRCode','ScanQRController@index')->name('QRCodeIndex');

//แผนก-เบิกจ่าย
Route::get('ExportBarcode','LeadBorrowController@viewbarcode')->name('exportBarcode');
Route::get('editbarcode','LeadBorrowController@viewedit')->name('barcodeEdit');

//ระบบผู้ใช้งาน
Route::get('users','UsersController@list')->name('usersList');
Route::get('users/create','UsersController@userscreate')->name('usersCreate');
Route::get('users/setting','UsersController@settingusers')->name('usersSetting');
Route::get('/show','UsersController@showTable');