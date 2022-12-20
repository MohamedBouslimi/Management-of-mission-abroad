<?php 
use App\Http\Controllers\adminform;
use App\Http\Controllers\formcrud;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/form',[App\Http\Controllers\formcrud::class,'index']);
Route::post('/form',[App\Http\Controllers\formcrud::class,'DataInsert' ]);


//adminform



Route::middleware(['auth','isAdmin'])->group(function(){ 
    Route::get('/dashboard', function () {
        return view('/admin');
     }); 
     
     Route::get('/data',[App\Http\Controllers\formcrud::class,'data']); 
     Route::get('/edit{id}',[formcrud::class,'update']);  
     Route::post('/dataupdate{id}',[formcrud::class,'dataupdateIndex']); 
     Route::get('/afficher{id}',[App\Http\Controllers\formcrud::class,'afficher']); 
     Route::get('/viewAr{id}',[App\Http\Controllers\formcrud::class,'viewArab']);
     Route::get('/deletepage{id}',[App\Http\Controllers\formcrud::class,'deletindex']);
     Route::get('/delete{id}',[App\Http\Controllers\formcrud::class,'deletedata']); 
     Route::get('/fraisAdmin',[App\Http\Controllers\adminform::class,'indexAdmin']); 
route::post('/fraisAdmin',[App\Http\Controllers\adminform::class,'datasave']);
Route::get('/data_admin',[App\Http\Controllers\adminform::class,'datashow']); 
Route::get('/updatepage{id}',[App\Http\Controllers\adminform::class,'editpage']); 
Route::post('/dataedit{id}',[App\Http\Controllers\adminform::class,'updatedataform']); 
Route::get('/remove{id}',[App\Http\Controllers\adminform::class, 'removindex']);  
Route::get('/destroy{id}',[App\Http\Controllers\adminform::class,'removedata']);  
Route::get('/usermanagement',[App\Http\Controllers\usermanagement::class,'index']); 
     
 });

