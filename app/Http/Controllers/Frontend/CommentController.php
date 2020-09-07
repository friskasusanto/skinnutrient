<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Comment;
use App\User;

class CommentController extends Controller
{
    public function commentBlog (Request $request, $judul)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required', 
        ]);

    	$blog = Blog::where('judul', $judul)->first();
    	$user = User::where('email', $blog->email)->first();
    	$cek = Comment::where('email', $request->email)->first();

    	if (! $cek){

	    	$comment = new Comment;
	    	$comment->product_id = null;
	    	$comment->blog_id = $blog->id;
	    	$comment->parent = 1;
	    	$comment->child = 0;
	    	$comment->status = 0;
	    	$comment->comment = $request->comment;
	    	$comment->name = $request->name;
	    	$comment->email = $request->email;
	    	$comment->judul = $blog->judul;
	    	$comment->save();

	    	if ($comment->email == $user)
	    	{
	    		$status = 200;
	        	$message = "Terimakasih Atas Partisipasi Anda ". $user->name;
	    	}else {
	    		$status = 200;
	        	$message = "Terimakasih Atas Partisipasi Anda ". $comment->name;
	    	}
	    } else {
	    	$status = 200;
	        $message = "Terimakasih Atas Partisipasi Anda, Anda Sudah Pernah Meninggalkan Comment, Silahkan Gunakan Email Lain";
	    }
    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
