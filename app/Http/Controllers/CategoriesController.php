<?php

namespace App\Http\Controllers;

use App\Category;
use App\Classified;
use Illuminate\Http\Request;
use Debugbar;

class CategoriesController extends Controller
{
    public function show($id)
    {
        $classifieds = Category::find($id)->classifieds;
        return view('index', compact('classifieds'));
    }
}
