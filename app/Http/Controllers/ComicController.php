<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function show($id) {
        $comic = Comic::where('id', $id)->first();
        return view('details', compact('comic'));
    }
}
