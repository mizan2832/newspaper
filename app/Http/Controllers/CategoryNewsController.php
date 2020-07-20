<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
use App\admin\Category;

class CategoryNewsController extends Controller
{
    public function category(Request $request){
        
        $name          = explode("/",$request->url());
        $count         = count($name);
        $category      = $name[$count-1];
        $category_name = $name[$count-1];
       
        $category = DB::table('categories')->where('slug',$category)->first();
        $news     = DB::table('news')->where('category_id',$category->id)->orderby('created_at','desc')->paginate(2);
        $categorynews     = DB::table('news')
        ->select('news.*', 'categories.name as category_name')
        ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
        ->take(6)->get();
        $breaking = DB::table('news')->where('category_id','12')->whereDate('created_at','2020-06-12')->get();
        $category = Category::all();
        return view('front.pages.single_category',['category_name' => $category_name])
                                                 ->withNews($news)
                                                 ->withCategories($category)                               
                                                 ->withBreaking($breaking)                               
                                                 ->withCategorynews($categorynews);

    }
}
