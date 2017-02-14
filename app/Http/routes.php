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

// Route::get('/', function () {
// 	$categories = App\Category::whereHas('books', function($query){
// 		$query->where('status','public');
// 	})->get();
//     return view('relationship', compact('categories'));
// });

Route::get('/', function (){
	$users = App\User::all();
	return view('manytomany', compact('users'));
});

Route::delete('destroy', function(Illuminate\Http\Request $request) {
	$ids = $request->get('ids');
	if(count($ids)){
		App\Book::destroy($ids);
	}
	return back();
});
