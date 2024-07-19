<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = ['Category 01, Category 02'];
        // $allCategories = DB::table('categories')->get();
        $allCategories = Category::all();
        return view('home', ['categories' => $allCategories]);
    }
}
