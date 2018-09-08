<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Gallery;

use App\Post;

class PagesController extends Controller
{
    //

    public function index() {
    	$sliders = Slider::all();

    	$gallery = Gallery::all();

        $posts = Post::latest()->get();

    	return view('welcome', compact('sliders', 'gallery', 'posts'));
    }

    public function about() {

    	$gallery = Gallery::all();

    	return view('about', compact('gallery'));
    }

     public function contact() {

        $gallery = Gallery::all();

        return view('contact', compact('gallery'));
    }

    public function store() {

        //
    }


     public function products() {

        $gallery = Gallery::all();

        return view('products', compact('gallery'));
    }

     public function gallery() {

        $gallery = Gallery::all();

        return view('gallery', compact('gallery'));
    }
}
