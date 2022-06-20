<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return view('index', [
            'products' => product::latest()->limit(8)->get(),
            'categories' => Category::all()
        ]);
    }
}
