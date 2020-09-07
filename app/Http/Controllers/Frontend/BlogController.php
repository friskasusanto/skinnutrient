<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Comment;

class BlogController extends Controller
{
    public function blog ()
    {
    	$blog = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    	$recent = Blog::orderBy('created_at', 'asc')->limit(5)->get();
    	$popular = Blog::orderBy('love', 'desc')->limit(4)->get();

    	return view('frontend.blog.blog', compact('blog', 'recent', 'popular'));
    }

    public function detail (Request $request, $judul)
    {
    	$blog = Blog::where('judul', $judul)->first();
    	$comment = Comment::where('blog_id', $blog->id);

    	return view('frontend.blog.detailBlog', compact('blog', 'comment'));
    }
}
