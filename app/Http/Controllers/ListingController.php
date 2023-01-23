<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all
    public function index(Request $req) {
        return view('listings.index', [
            'listings' => Listing::filter([
                'tag' => $req->tag,
                'search' => $req->search
            ])->get()
        ]);
    }

    public function show(Listing $list) {
        return view('listings.show', [
            'list' => $list
        ]);
        
    }
}
