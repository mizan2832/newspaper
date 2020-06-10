<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\News;
use Input;
class DashboardController extends Controller
{
    public function index(){
    	return view('admin.master');
    }

    public function news_search(Request $request){
        
        
        $news = News::orderby('id','desc')->paginate(5);
        return view('admin.pages.news.index')->withNews($news);
    }
}
