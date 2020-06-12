<?php

namespace App\Http\Controllers;
use App\admin\News;
use App\admin\Category;
use DB;

class singleNewsController extends Controller
{
    public function getSingle($category, $slug, $id)
    {
        $category_name   = ucfirst($category);
        $news       = DB::table('news')
            ->select('news.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->take(8)->get();
        $category = Category::all();
        $singleNews = News::find($id);
        $count = $singleNews->total_view;
        $count = $count + 1;
        $singleNews->total_view = $count;
        $singleNews->save();
        $breaking = DB::table('news')->where('category_id','12')->whereDate('created_at','2020-06-12')->get();

        
       
        return view('front.pages.single',['category_name',$category_name])
                                        ->withSinglenews($singleNews)
                                        ->withCategories($category)
                                        ->withBreaking($breaking)
                                        ->withNews($news);

    }
}
