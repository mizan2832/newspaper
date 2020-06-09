<?php

namespace App\Http\Controllers\Admin;

use App\admin\Category;
use App\admin\News;
use App\admin\Tag;
use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;
use Image;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('id','desc')->paginate(5);
        return view('admin.pages.news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        // dd($tags);
        $categories = Category::all();
        return view('admin.pages.news.create')
            ->withTags($tags)
            ->withCategories($categories);

    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title'       => 'required|unique:news|max:255',
            'description' => 'required',
            'category'    => 'required',
            'image'       => 'required|max:2048|dimensions:min_width=100,min_height=200',
            'category'    => 'required',

        ]);




        $news              = new News();
        $news->category_id = $request->category;
        $news->user_id     = 0;
        $news->title       = $request->title;
        $news->slug        = strtolower($request->title);
        $news->description = strip_tags($request->description);

        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/thumbnail/' . $filename);
            Image:: make($image)->resize(500, 300)->save($location);
            $news->image = $filename;
        }

        $news->save();
        $news->categories()->attach($request->category);
        $news->tags()->attach($request->tag);
        return redirect(route('admin.news.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singlenews = News::find($id);
        $tags       = Tag::all();
        $categories = Category::all();
        return view('admin.pages.news.edit')->withSinglenews($singlenews)->withTags($tags)
            ->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'       => 'required|unique:news|max:255',
            'description' => 'required',
            'category'    => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=200',
            'category'    => 'required',

        ]);

        $news              = News::find($id);
        $news->title       = $request->title;
        $news->slug        = strtolower($request->title);
        $news->description = strip_tags($request->description);

        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/thumbnail/' . $filename);
            Image:: make($image)->resize(500, 300)->save($location);
            $news->image = $filename;
        }
        $news->save();
        $news->categories()->attach($request->category);
        $news->tags()->attach($request->tag);
        return redirect(route('admin.news.index'));
    }

   
    public function destroy($id)
    {
        DB::table('news')->where('id', '=', $id)->delete();
        return redirect(route('admin.news.index'));
        
    }
}
