<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/{list}', [ListingController::class, 'show']);


// Route::get('/?tag={{tag}}', function($tag) {
//     $tag = trim($tag, ' ');
//     $listings = Listing::all();
//     $tagListCategory = array();

//     foreach($listings as $list){
//         $tagList = explode(',', $list->tags);
//         foreach($tagList as $listTag){
//             if($listTag == $tag){
//                 array_push($tagListCategory, $list);
//             }
//         }
//     }

//     return view('listings', [
//         'listings' => $tagListCategory
//     ]);
// });