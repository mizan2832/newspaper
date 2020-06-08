<?php

namespace App\Http\Controllers;
use App\admin\News;
use App\admin\Category;
use DB;

class singleNewsController extends Controller
{
    public function getSingle($category, $slug, $id)
    {
        $category   = ucfirst($category);
        $singleNews = News::find($id);
        $news       = DB::table('news')
            ->select('news.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->take(6)->get();
        $category = Category::all();
        return view('front.pages.single')
                                        ->withSinglenews($singleNews)
                                        ->withCategories($category)
                                        ->withNews($news);

    }
}
