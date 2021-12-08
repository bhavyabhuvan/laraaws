<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
    // return view('welcome');
// });


Route::view('/','student'); //to save the data into database url student and student.blade.php is used
Route::view('name','getname'); //to get the age and position from database url name and getname.blade.php is used

Route::view('pos','giveposition'); //to get the age and name from database url pos and giveposition.blade.php is used


Route::get('savedata',[DataController::class,'index']);// data is submitted index() method in datacontroller is executed.

Route::get('hai',[DataController::class,'getdetails']);// when name is submitted getdeatails method in datacontroller is executed.

Route::get('hell',[DataController::class,'getage']);// when name is submitted getdeatails method in datacontroller is executed.

Route::get('/quiz',[PageController::class,'quiz']);
    Route::get('/newquiz',[PageController::class,'newquiz']);

    Route::get('quiz',[PageController::class,'quiz'])->name('quiz');
    Route::get('quiz',[PageController::class,'quiz'])->name('quiz');

     Route::get('filtercontroller/subjectfetch',[FilterController::class,'subjectfetch'])->name('filtercontroller.subjectfetch');
    Route::get('filtercontroller/quizsubjectfetch',[FilterController::class,'quizsubjectfetch'])->name('filtercontroller.quizsubjectfetch');
    Route::get('filtercontroller/languagefetch',[FilterController::class,'languagefetch'])->name('filtercontroller.languagefetch');
    Route::get('filtercontroller/quizlanguagefetch',[FilterController::class,'quizlanguagefetch'])->name('filtercontroller.quizlanguagefetch');
    Route::get('filtercontroller/unitfetch/',[FilterController::class,'unitfetch'])->name('filtercontroller.unitfetch');
    Route::get('filtercontroller/quizunitfetch/',[FilterController::class,'quizunitfetch'])->name('filtercontroller.quizunitfetch');
    Route::get('filtercontroller/topicfetch',[FilterController::class,'topicfetch'])->name('filtercontroller.topicfetch');
    Route::get('filtercontroller/quiztopicfetch',[FilterController::class,'quiztopicfetch'])->name('filtercontroller.quiztopicfetch');
    Route::get('filtercontroller/fetchComic',[FilterController::class,'fetchcomic'])->name('filtercontroller.fetchcomic');
    Route::get('filtercontroller/fetchOnAll',[FilterController::class,'fetchOnAll'])->name('filtercontroller.fetchOnAll');
    Route::get('filtercontroller/quizsubjectfetch',[FilterController::class,'quizsubjectfetch'])->name('filtercontroller.quizsubjectfetch');
    Route::get('filtercontroller/quizfetchOnAll',[FilterController::class,'quizfetchOnAll'])->name('filtercontroller.quizfetchOnAll');
    Route::get('filtercontroller/quizunitfetch',[FilterController::class,'quizunitfetch'])->name('filtercontroller.quizunitfetch');
    Route::get('filtercontroller/vendorsubjectfetch',[FilterController::class,'vendorsubjectfetch'])->name('filtercontroller.vendorsubjectfetch');
    Route::get('filtercontroller/vendorlanguagefetch',[FilterController::class,'vendorlanguagefetch'])->name('filtercontroller.vendorlanguagefetch');
    Route::get('filtercontroller/vendorunitfetch',[FilterController::class,'vendorunitfetch'])->name('filtercontroller.vendorunitfetch');
    Route::get('filtercontroller/vendortopicfetch',[FilterController::class,'vendortopicfetch'])->name('filtercontroller.vendortopicfetch');
    Route::get('filtercontroller/vendorfetchComic',[FilterController::class,'vendorfetchcomic'])->name('filtercontroller.vendorfetchcomic');
    Route::get('filtercontroller/vendorfetchOnAll',[FilterController::class,'vendorfetchOnAll'])->name('filtercontroller.vendorfetchOnAll');
    Route::get('filtercontroller/infycomicfetch',[FilterController::class,'infycomicfetch'])->name('filtercontroller.infycomicfetch');
