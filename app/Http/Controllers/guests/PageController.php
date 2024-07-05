<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $comicsHome = Comic::all();
        $data = [
            "comics"=> $comicsHome
        ];
        return view("home", $data);
    }
}
