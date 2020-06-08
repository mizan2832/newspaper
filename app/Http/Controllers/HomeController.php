<?php

namespace App\Http\Controllers;

use App\admin\Category;
use DB;

class HomeController extends Controller
{

    

    public function index()
    {

        $news = DB::table('news')
            ->select('news.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->take(6)->get();
        //dd($news);

        $category = Category::all();
        return view('front.pages.home')->withCategories($category)->withNews($news);
    }
}
