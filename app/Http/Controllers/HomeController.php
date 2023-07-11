<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function categories()
    {
        return view('pages.categories');
    }
    


    public function getCategories()
    {
        $category = Category::with('subCategories.subSubCategories')->first();
        return $category;
    }
}
