<?php

namespace App\Http\Controllers;

use App\admin\Category;
use App\admin\News;
use DB;

class HomeController extends Controller
{

    public function index()
    {

        $news = DB::table('news')
            ->select('news.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->take(6)->orderby('id','desc')->get();
        //dd($news);
        $popularnews = DB::table('news')
            ->select('news.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->take(4)->orderby('total_view','desc')->get();
            
        $category = Category::all();
        return view('front.pages.home')
                                    ->withCategories($category)
                                    ->withPopularnews($popularnews)
                                    ->withNews($news);
    }
    
}
