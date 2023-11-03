<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\dobld;

use App\Http\Controllers\aas;
use App\Http\Controllers\aastha;
use PharIo\Manifest\ComponentElementCollection;
use App\Http\Controllers\babita;
use App\Http\Controllers\htmlform;
use App\Http\Controllers\databsed;

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

Route::get('a', function () {
    return view('hello');
});
// Route::get("users",[Users::class,'index']);
// Route::get('/user',function(){
//     return view('Users');
// // });
// Route::get("/user/{name}",function($name){
//     return view("Users",['name'=>$name]);
// });
// Route::get("Usser",[Users::class,'loadview']);
Route::view("User","User");
Route::view("about","About");
// Route::get("hey",[Usercontroller::class,'viewload']);
// Route::get("users/{user}",[aas::class,'index']);
// Route::get('aar/{name}',function($name){
//     return view('aar',['username'=>$name]);
// });
// Route::get('/aar',function(){
//     return view('aar');
// });
// Route::view("call","aar");
// Route::get('/{name}',[aastha::class,'loadview']);
// Route::get('/',[aastha::class,'loadview']);


Route::view("sis","componentttt");
Route::view("about","sisabout");
Route::get('/bab',[babita::class,'viewload']);
Route::get('/bd',[dobld::class,'viewload']);
Route::post('html',[htmlform::class,'getData']);
Route::view("login","html");
Route::view("home","homemidd");
Route::view("noacess","noacess");
Route::view("middle","middleware")->middleware('protectedPage');
// Route::view("grg","grpmiddleware");
Route::view("grh","grphome");
Route::view("grn","grpnoacess");
Route::group(['middleware'=>['protectedPage']],function(){
    Route::view("grg","grpmiddleware");
});
Route::get('db',[databsed::class,'index']);
