<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class FrontController extends Controller
{
    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function welcome() 
    {
    	# code...
	  $post = Post::find(1);
    return view('welcome')->with('post', $post);
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function skiing() 
    {
    	//
	$post = Post::find(2);
    return view('skiing',compact('post'));
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop() 
    {
    	//
	$post = Post::find(3);
    return view('shop',compact('post'));
    }
}
