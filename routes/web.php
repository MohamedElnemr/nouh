<?php

use App\Models\PageOne;
use App\Models\PageTwo;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pageOne', function () {
//     return view('home');
// });


// Page One
Route::get('/page-one', [App\Http\Controllers\PageOneController::class, 'index'])->name('pageoneindex');
Route::post('/add-page-one', [App\Http\Controllers\PageOneController::class, 'store'])->name('pageonestore');
// Route::post('/add-page-one/{id}', [App\Http\Controllers\PageOneController::class, 'store'])->name('pageonestore');




// Page Two
Route::get('/page-two', [App\Http\Controllers\PageTwoController::class, 'index'])->name('pagetwo');
Route::post('/add-page-two', [App\Http\Controllers\PageTwoController::class, 'store'])->name('pagetwostore');



// Page Three
Route::get('/page-three', [App\Http\Controllers\PageTreeController::class, 'index'])->name('pagethree');
Route::post('/add-page-three', [App\Http\Controllers\PageTreeController::class, 'store'])->name('pagethreestore');



// Page Four
Route::get('/page-four', [App\Http\Controllers\PageFourController::class, 'index'])->name('pagefour');
Route::post('/add-page-four', [App\Http\Controllers\PageFourController::class, 'store'])->name('pagefourstore');


// Page Five
Route::get('/page-five', [App\Http\Controllers\PageFiveController::class, 'index'])->name('pagefive');
Route::post('/add-page-five', [App\Http\Controllers\PageFiveController::class, 'store'])->name('pagefivestore');


// Page Six
Route::get('/page-six', [App\Http\Controllers\PagSixController::class, 'index'])->name('pagesix');
Route::post('/add-page-six', [App\Http\Controllers\UnitsController::class, 'store'])->name('pagesixstore');



// Page Seven
Route::get('/page-seven', [App\Http\Controllers\PagSevenController::class, 'index'])->name('pageseven');


// Page All Data
Route::get('/all-data', [App\Http\Controllers\UnitsController::class, 'index'])->name('alldata');



// Data
Route::get('/data1', [App\Http\Controllers\Data1Controller::class, 'index'])->name('data1');
Route::get('/data2', [App\Http\Controllers\Data2Controller::class, 'index'])->name('data2');
Route::get('/data3', [App\Http\Controllers\Data3Controller::class, 'index'])->name('data3');
Route::get('/data4', [App\Http\Controllers\Data4Controller::class, 'index'])->name('data4');
Route::get('/data5', [App\Http\Controllers\Data5Controller::class, 'index'])->name('data5');








// Relations
Route::get('pageone/{id}',function ($id)
{
    $pageone = PageOne::findOrFail($id);

    dd($pageone);
    // dd($pageone->PageTwo);
    // dd($pageone->PageTwo->location);

    // $pageone->PageTwo()->updateOrCreate(['page_one_id'=>$pageone->id],['location'=>'الرحاب']);

});


Route::get('pagetwo/{id}',function ($id)
{
    $pagetwo = PageTwo::findOrFail($id);

    // dd($pagetwo);
    // dd($pagetwo->PageOne);
    dd($pagetwo->pageone->name);



});
