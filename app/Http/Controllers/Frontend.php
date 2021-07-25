<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index(){
        $data = Post::select('title', 'slug', 'description', 'thumbnail', 'created_at')->simplePaginate(12);
        return view('frontend.blog.grid', compact('data'));
    }

    public function single($slug){
        $data = Post::with('user')->where('slug', $slug)->first();
        return view('frontend.blog.single', compact('data'));
    }

    public function about(){

        return view('frontend.pages.about');
    }
    public function shop(){

        $data = Product::select('name', 'slug', 'short_description', 'thumbnail')->simplePaginate(10);
        return view('frontend.shop.index', compact('data'));
    }


    public function singleProduct($slug){

        $data = Product::where('slug', $slug)->first();
        return view('frontend.shop.single', compact('data'));
    }
    public function contact(){

        return view('frontend.pages.contact');
    }

    public function cart(){


        return view('frontend.shop.cart');
    }
    public function checkout(){

        return view('frontend.shop.checkout');
    }

    public function showlogin(){
        return view('frontend.pages.login');
    }

}
