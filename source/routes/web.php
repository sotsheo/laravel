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
// Route::get("createdata",function(){
// 	Schema::create('TheLoai', function ( $table) {
//             $table->increments('id');
//             $table->string('Ten');
//             $table->string('TenKhongDau');
//             $table->timestamps();
//         });
// 	 Schema::create('LoaiTin', function ($table) {
//             $table->increments('id');
//             $table->integer('idTheLoai')->unsigned();
//             $table->foreign('idTheLoai')->references('id')->on('TheLoai');
//             $table->string('Ten');
//             $table->string('TenKhongDau');
//             $table->timestamps();
//         });
// 	 Schema::create('Slide', function ($table) {
//             $table->increments('id');
//             $table->string('Ten');
//             $table->string('Hinh');
//             $table->string('NoiDung');
//             $table->string('link');
//             $table->timestamps();
//         });
// 	 Schema::create('TinTuc', function ($table) {
//             $table->increments('id');
//             $table->string('TieuDe');
//             $table->string('TieuDeKhongDau');
//             $table->text('TomTat');
//             $table->longText('NoiDung');
//             $table->string('Hinh');
//             $table->integer('NoiBat')->default(0);
//             $table->integer('SoLuotXem')->default(0);
//             $table->integer('idLoaiTin')->unsigned();
//             $table->foreign('idLoaiTin')->references('id')->on('LoaiTin');
//             $table->timestamps();
//         });
// 	 Schema::create('Comment', function ($table) {
//             $table->increments('id');
//             $table->integer('idUser')->unsigned();
//             $table->foreign('idUser')->references('id')->on('Users');
//             $table->integer('idTinTuc')->unsigned();
//             $table->foreign('idTinTuc')->references('id')->on('TinTuc');
//             $table->string('NoiDung');
//             $table->timestamps();
//         });
	
// });
// login

Route::group(['prefix' => 'admin'],function(){
	Route::get("login",["as"=>"logins","uses"=>"Admin@login"])->middleware("checklogins");
    Route::get("user",["as"=>"user","uses"=>"Admin@user"]);
});
