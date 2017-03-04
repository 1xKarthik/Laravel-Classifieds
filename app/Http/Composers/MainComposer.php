<?php

namespace App\Http\Composers;

use App\Category;
use Illuminate\Contracts\View\View;

class MainComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }
}