<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    //
    public function showPostData()
    {
    	// Read value from Model method
	    $postData = Posts::getPostData();

	    // Pass to view
	    return view('posts')->with("postData",$postData);
    }

    public function createPostData()
    {
    	$posts = new Posts;
 
		$posts->title = 'Johnvv';
		$posts->description = 'Johndescriptionbb';
 
		$posts->save();

		// Read value from Model method
	    $postData = Posts::getPostData();

	    // Pass to view
	    return view('posts')->with("postData",$postData);
    }

    
}
