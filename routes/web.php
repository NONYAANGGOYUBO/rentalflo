<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\registrationcontroller;
use App\Http\controllers\logincontroller;
use App\Http\controllers\dashboardcontroller;
use App\Http\controllers\propertycontroller;
use App\Http\controllers\tenantcontroller;
use App\Http\controllers\districtcontroller;




Route::get('/',[registrationcontroller::class,'index'])->name('index');

Route::get('/signup',[registrationcontroller::class,'signup'])->name('registration');

Route::post('/storedata',[registrationcontroller::class,'storedata'])->name('storedata');

Route::get('/login',[logincontroller::class,'login'])->name('login');

Route::post('/logedin',[logincontroller::class,'logedin'])->name('logedin');

Route::post('/logout',[logincontroller::class,'logout'])->name('logout');

Route::get('/dashboard',[dashboardcontroller::class,'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/rent',[dashboardcontroller::class,'rent'])->middleware('auth')->name('rent');

Route::get('/expenses',[dashboardcontroller::class,'expenses'])->middleware('auth')->name('expenses');

Route::get('/setting',[dashboardcontroller::class,'setting'])->middleware('auth')->name('setting');


// properties Route

Route::get('/newproperty',[propertycontroller::class,'newproperty'])->middleware('auth')->name('newproperty');

// Route::get('/districtlist2',[propertycontroller::class,'districtlist2'])->middleware('auth')->name('districtlist2');

Route::get('/viewproperties',[propertycontroller::class,'viewproperties'])->middleware('auth')->name('viewproperties');

Route::post('/storeproperty',[propertycontroller::class,'propertydata'])->middleware('auth')->name('storeproperty');

Route::get('property/viewpropertydetails/{id}',[propertycontroller::class,'show'])->middleware('auth')->name('show');

Route::get('property/edit/{id}',[propertycontroller::class,'edit'])->middleware('auth')->name('edit');

Route::put('property/update/{id}',[propertycontroller::class,'update'])->middleware('auth')->name('update');




// tenant Route

Route::get('/newtenant',[tenantcontroller::class,'newtenant'])->middleware('auth')->name('newtenant');

Route::post('/storetenantdata',[tenantcontroller::class,'storetenantdata'])->middleware('auth')->name('storetenantdata');

Route::get('/viewtenant',[tenantcontroller::class,'viewtenant'])->middleware('auth')->name('viewtenant');



// District
// Route::get('/district',[districtcontroller::class,'district'])->name('district');

Route::post('/storedist',[districtcontroller::class,'storedist'])->name('storedist');

Route::get('/districtlist',[districtcontroller::class,'districtlist'])->name('districtlist');





