<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){

        $comics = [];
        return view('comics.index', compact('comics'));
    }
}
