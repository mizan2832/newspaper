<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;


class CategoryNewsController extends Controller
{
    public function category(Request $request){
        
        $name = explode("/",$request->url());
        $count = count($name);
        $category = $name[$count-1];
        $category =DB::table('categories')->where('slug',$category)->first();
      
        $news = DB::table('news')->where('category_id',$category->id)->get();
        dd($news);

    }
}
