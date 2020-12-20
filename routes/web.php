<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Memberscontroller;
use App\Http\Controllers\Membercontroller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StunController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ArticlesController;
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

/*Route::get('/{name}', function ($name) {
    echo $name;
    return view('welcome');
});*/
/*Route::get('/about', function () {
    return view('about');
});*//*
Route::get('/', function () {
   # return view('welcome');
  #  return redirect('about');
    return view('welcome');
});*/

#Route::view("about",'about');
#Route::view("contact",'contact');
#Route::view("users",'users');
#Route::get("users",[Users::class,'index']);

#Route::get("users",[UsersContoller::class,'viewLoad']);
#Route::post("users",[UsersContoller::class,'getData']);
/*Route::view("login","users");*/
#Route::view("users","users");
Route::view("home","home");
/*Route::view("users","home");*/
Route::view("noaccess","noaccess");

/*
 * middleware group
Route::group(['middleware'=>['protectedPage']],function()
{
        Route::view('users','users');
});*/

/* route middlewale
 * Route::view('users','users')->middleware(('protectedPage'));
*/
#Route::get('users',[UserController::class,'getData']);
#Route::get('users',[UserController::class,'index']);
/*Route::view("login","user");*/
/*Route::post("user",[UserAuth::class,'userLogin']);
#Route::view("login","login");
Route::view('profile','profile');*/


/*Route::get('/login',function () {
    if(session()->has(['user'])) {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout',function () {
if(session()->has(['user'])) {
    session()->pull('user');
}
     return redirect('login');
});*/

/*Route::view('add','add');*/
/*Route::post('addmember',[AddMember::class,'addMember']);*/
/*Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);

Route::get('/profile/{lang}',function ($lang){
    App::setlocale($lang);
    return view('profile');
});

#Route::get('list',[Memberscontroller::class,'show']);

Route::view('add','addmember');
Route::post('add',[Membercontroller::class,'addDate']);

Route::get('list',[Membercontroller::class,'list']);
Route::get('delete/{id}',[Membercontroller::class,'delete']);
Route::get('edit/{id}',[Membercontroller::class,'showData']);
Route::post('edit/{id}',[Membercontroller::class,'update']);
Route::get('show',[EmployeeController::class,'show']);
Route::get("data",[Membercontroller::class,'index']);
Route::get("holy",[AdminController::class,'holy']);
Route::get('stuns','StunController@stuns');*/

#레스토랑 관련
Route::get('/',[RestoController::class,'index']);
Route::get('/list',[RestoController::class,'list']);
Route::view('add','restoadd');
Route::post('add',[RestoController::class,'add']);
Route::get('edit/{id}',[RestoController::class,'showData']);
Route::post('edit/{id}',[RestoController::class,'update']);
Route::get('delete/{id}',[RestoController::class,'delete']);
Route::get('/search',[RestoController::class,'search']);

#스토어
Route::get('storelist',[StoreController::class,'list']);
Route::get('storeedit/{id}',[StoreController::class,'viewData']);



#test
Route::resource('articles','App\Http\Controllers\ArticlesController');
Route::get('articlesedit/{id}',[ArticlesController::class,'viewData']);
Route::get('add',[ArticlesController::class,'add']);
Route::post('add2',[ArticlesController::class,'add2']);
Route::get('create',[ArticlesController::class,'create']); #유효성 검사 test

#이벤트 시스템
//Event::listen('article.created', function ($article) {
//    var_dump('이벤트를 받았습니다.  받은 데이터(상태)는 다음과같습니다');
//    var_dump($article->toArray());
//});

Route::get('/autocomplete',[RestoController::class,'autocomplete'])->name('autocomplete');










