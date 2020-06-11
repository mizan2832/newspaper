<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\Category;
use App\admin\News;
use DB;
class DashboardController extends Controller
{
    public function index(){
    $news = DB::table('news')
        ->inRandomOrder()
        ->select('news.*', 'categories.name as category_name')
        ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
        ->orderby('news.*','asc')
        ->limit(6)->first();

    
     
    $category = Category::all();
        return view('front.pages.home')
                                        ->withCategories($category)
                                        ->withNews($news)
                                        ->withPopular_news($popular_news);
    	
    }
}
