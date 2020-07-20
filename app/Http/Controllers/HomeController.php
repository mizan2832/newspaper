<?php

namespace App\Http\Controllers;
use App\admin\Category;
use App\admin\News;
use DB;
use Illuminate\Http\Request;

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
        $breaking = DB::table('news')->where('category_id','12')->whereDate('created_at','2020-06-12')->get();

        return view('front.pages.home')
                                    ->withCategories($category)
                                    ->withPopularnews($popularnews)
                                    ->withBreaking($breaking)
                                    ->withNews($news);
    }
    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'search'  => 'required'
        ]);

        $search = DB::table('news')
                                 ->where('title',$request->search)
                                 ->orWhere('title','like',"%$request->search%")
                                 ->orWhere('description','like',"%$request->search%")->get();
        $category = Category::all();
        $breaking = DB::table('news')->where('category_id','12')->whereDate('created_at','2020-06-12')->get();
        return view('front.pages.search')
                                        ->withSearchnews($search)
                                        ->withCategories($category)
                                        ->withBreaking($breaking);
    }
    
}
