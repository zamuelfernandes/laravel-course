<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = ['Category 01, Category 02'];
        // $allCategories = DB::table('categories')->get();
        $categories = Category::all();
        // $posts = Post::orderBy('id', 'desc')->get();
        // $posts = Post::latest()->get();
        // $posts = Post::where('category_id', request('category_id'))->latest()->get();
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        // return view('home', ['categories' => $allCategories, 'posts' => $posts,]);
        return view('home', compact('categories', 'posts'));
    }
}
