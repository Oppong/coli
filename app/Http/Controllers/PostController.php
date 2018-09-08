<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Slider;

use App\Gallery;

class PostController extends Controller
{
    //

    public function index() {

        $gallery = Gallery::all();

    	$sliders = Slider::all();

    	$posts = Post::paginate(6);

    	$category = Category::all();

    	return view('posts.index', compact('posts', 'category', 'sliders', 'gallery'));
    }

    public function show(Post $post) {

            $gallery = Gallery::all();

    	return view('posts.show', compact('post', 'gallery'));
    }
}
