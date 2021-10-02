<?php
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

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


/******************* Admin  *******************/

Route::get('/', function () {
    return view('admin.index');
})->middleware(['auth'])->name('/admnin');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('/');


/******************* orders  *******************/
Route::resource('orders', OrdersController::class)->only([
    'index', 'show', 'returned'
]);

/******************* employee  *******************/
Route::resource('employee', EmployeeController::class)->middleware(['auth']);

/******************* customers  *******************/
 Route::get('/customers', function () {
    return view('customers');
})->middleware(['auth']);

/******************* data  *******************/
Route::get('/data', function () {
    return view('data');
})->middleware(['auth']);

/******************* statistics  *******************/
Route::resource('statistics', StatisticsController::class)->middleware(['auth']);


require __DIR__.'/auth.php';



/******************* File download  *******************/

// Route::get('download/{file}', function ($file){
//     return \Illuminate\Support\Facades\Storage::download($file);
//  }) -> where('file', '.*') -> name('download');

