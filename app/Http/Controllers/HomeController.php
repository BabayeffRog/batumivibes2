<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProperties = Property::where('is_featured', true)->limit(4)->get();
        $blogs = Blog::whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->take(2)
            ->get();

        return view('welcome', compact('featuredProperties', 'blogs'));
    }

    public function index2()
    {
        return view('index2');
    }

    public function index3()
    {
        return view('index3');
    }

    public function about()
    {
        return view('about');
    }

    public function destination()
    {
        return view('destination');
    }

    public function destinationdetails()
    {
        return view('destinationdetails');
    }

    public function tour()
    {
        return view('tour');
    }

    public function tourdetails()
    {
        return view('tourdetails');
    }

    public function blog()
    {
        $blogs = Blog::latest('published_at')->paginate(6);
        $popularBlogs = Blog::orderBy('published_at', 'desc')->limit(4)->get();
        return view('blog', compact('blogs', 'popularBlogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $popularBlogs = Blog::orderBy('published_at', 'desc')->limit(4)->get();

        return view('blogdetails', compact('blog', 'popularBlogs'));
    }

    public function contact()
    {
        return view('contact');
    }

}
