<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchableRequest;

class MainPageController extends Controller
{
    public function index() {
        $mostSearched = SearchableRequest::orderBy('quantity', 'desc')->take(5)->pluck('request');
        return inertia('Main',compact('mostSearched'));
    }
}
