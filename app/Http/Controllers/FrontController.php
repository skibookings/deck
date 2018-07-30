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

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function parties() 
    {
    	//
	$post = Post::find(4);
    return view('parties',compact('post'));
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact() 
    {
    	//
	$post = Post::find(5);
    return view('contact',compact('post'));
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function items() 
    {
    	//
	  //$post = Post::find(6);
    return view('items');//,compact('post'));
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bumboarding() 
    {
    	//
	$post = Post::find(6);
    return view('bumboarding',compact('post'));
    }

    /**
     * Show the landing page of the application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slide() 
    {
    	//
	$post = Post::find(7);
    return view('slide',compact('post'));
    }
}
