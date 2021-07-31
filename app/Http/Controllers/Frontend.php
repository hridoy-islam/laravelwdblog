<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Auth;

class Frontend extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle('Blog Page');
        $this->seo()->setDescription('Blog Page Meta');
        $data = Post::select('title', 'slug', 'description', 'thumbnail', 'created_at')->simplePaginate(12);
        return view('frontend.blog.grid', compact('data'));
    }

    public function single($slug)
    {

        $data = Post::with('user')->where('slug', $slug)->first();
        $this->seo()->setTitle($data['title']);
        $this->seo()->setDescription($data['short_description']);
        $cat = Category::all();
        return view('frontend.blog.single', compact('data', 'cat'));
    }

    public function about()
    {
        $this->seo()->setTitle('About Page');
        $this->seo()->setDescription('About description');
        return view('frontend.pages.about');
    }

    public function shop()
    {
        $data = Product::select('name', 'slug', 'short_description', 'price', 'thumbnail')->simplePaginate(10);
        return view('frontend.shop.index', compact('data'));
    }


    public function singleProduct($slug)
    {

        $data = Product::where('slug', $slug)->first();
        $this->seo()->setTitle($data['name']);
        $this->seo()->setDescription($data['short_description']);
        $this->seo()->setCanonical(url()->current());

        return view('frontend.shop.single', compact('data'));
    }
    public function contact()
    {

        return view('frontend.pages.contact');
    }

    public function cart()
    {

        return view('frontend.shop.cart');
    }
    public function addtocart(Request $request)
    {
        $data = Product::find($request->product_id)->select('name');
        $carts = $request->except('_token', 'quantity', 'product_id', 'product_price');
        dd($request->all());
    }
    public function checkout()
    {

        return view('frontend.shop.checkout');
    }

    public function showlogin()
    {
        return view('frontend.pages.login');
    }

    public function showRegister()
    {
        $this->seo()->setTitle('Sign Up New Account');
        return view('frontend.pages.register');
    }
    public function processregister(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:4|confirmed',
        ]);

        $data = [
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
        ];
        try {
            Customer::create($data);
            $this->setSucessMessages('Account Has Been Created');
            return redirect()->route('customerlogin');
        } catch (\Exception $error) {

            $this->setErrorMessages($error->getMessage());
            return redirect()->back();
        }
    }
    public function processLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $data = $request->except('_token');

        if (Auth::attempt($data)) {
            $customer = Auth::user();
            $id = Auth::id();
            return redirect()->route('profile', $id);
        }
        $this->setSucessMessages('Password or Email Does Not Exist');
        return redirect()->route('login');
    }

    public function searchblog(Request $request)
    {
        $query =  $request->query('query');
        $data = Post::where('title', 'LIKE', '%' . $query . '%')->get();
        return view('frontend.blog.search', compact('data'));
    }

    public function bycategory($slug)
    {

        $category = Category::where('category_slug', $slug)->first();
        $id = $category->id;
        $name = $category->category_name;
        $data = Post::where('category_id', $id)->paginate(10);
        return view('frontend.blog.category', compact('data', 'name'));
    }
}
