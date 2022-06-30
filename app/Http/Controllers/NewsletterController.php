<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
class NewsletterController extends Controller
{
    public function store(Request $request){

       
        $validatedData = $request->validate([
            'name'  => 'required',
            'email' => 'required|unique:newsletters|max:255',
        ]);

        $newsletter        = new Newsletter;
        $newsletter->name  = $request->name;
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect('/')->with('success', 'Thanks For Subscribe');



    }



}
