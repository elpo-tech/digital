<?php

use App\Http\Controllers\dash\Dash;
use App\Http\Controllers\dash\Dashdb;
use App\Http\Controllers\Dcw;
use Illuminate\Support\Facades\Route;



Route::get("/", [Dcw::class, "index"])->name("index");
Route::POST("lvalidate", [Dcw::class, "lvalidate"])->name("log.lvalidate");
Route::get("/logout", [Dash::class, "logout"])->name("logout");
Route::get('/forgot', [Dcw::class, 'forgot'])->name('forgot');
Route::get("/dashboard", [Dash::class, "dash"])->name("dash");


Route::get("/reception", [Dash::class, "rec"])->name("rec");
Route::get("/add_gadget", [Dash::class, "addg"])->name("addg");
Route::get("/add_gadget/{id}", [Dashdb::class, "addg"])->name("addgid");
Route::get("/edit_hardware/{id}", [Dashdb::class, "addh"])->name("addhid");
Route::get("/hardware", [Dash::class, "hard"])->name("hard");
Route::get("/software", [Dash::class, "soft"])->name("soft");
Route::get("/users", [Dash::class, "user"])->name("user");
Route::get("/add_user", [Dash::class, "adduser"])->name("adduser");
Route::get("/payments", [Dash::class, "pay"])->name("pay");
Route::POST("/gadget_update/{id}", [Dashdb::class, "update"])->name("gadget.update");
Route::POST("/gadget_hupdate/{id}", [Dashdb::class, "hupdate"])->name("gadget.hupdate");
Route::get("/delete_gadget/{id}", [Dashdb::class, "delete"])->name("delete.gadget");
