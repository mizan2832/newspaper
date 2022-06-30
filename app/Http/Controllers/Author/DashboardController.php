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
        ->limit(6)->paginate(2);

    $popularnews = DB::table('news')
        ->select('news.*', 'categories.name as category_name')
        ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
        ->take(4)->orderby('total_view','desc')->get();
        $breaking = DB::table('news')->where('category_id','12')->whereDate('created_at','2020-06-12')->get();
    
     
    $category = Category::all();
        return view('front.pages.home')
                                        ->withCategories($category)
                                        ->withNews($news)
                                        ->withBreaking($breaking)
                                        ->withPopularnews($popular_news);
    	
    }
}
