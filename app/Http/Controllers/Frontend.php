<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class Frontend extends Controller
{
    use SEOToolsTrait;

    public function index(){
        $this->seo()->setTitle('Blog Page');
        $this->seo()->setDescription('Blog Page Meta');
        $data = Post::select('title', 'slug', 'description', 'thumbnail', 'created_at')->simplePaginate(12);
        return view('frontend.blog.grid', compact('data'));
    }

    public function single($slug){

        $data = Post::with('user')->where('slug', $slug)->first();
        $this->seo()->setTitle($data['title']);
        $this->seo()->setDescription($data['short_description']);
        return view('frontend.blog.single', compact('data'));
    }

    public function about(){
        $this->seo()->setTitle('About Page');
        $this->seo()->setDescription('About description');
        return view('frontend.pages.about');
    }

    public function shop(){
        $data = Product::select('name', 'slug', 'short_description', 'price', 'thumbnail')->simplePaginate(10);
        return view('frontend.shop.index', compact('data'));
    }


    public function singleProduct($slug){

        $data = Product::where('slug', $slug)->first();
        $this->seo()->setTitle($data['name']);
        $this->seo()->setDescription($data['short_description']);

        $this->seo()->setCanonical(url()->current());
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
