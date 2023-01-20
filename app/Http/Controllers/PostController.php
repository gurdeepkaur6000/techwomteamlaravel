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

    public function showCreatePost()
    {
        return view('add-post');
    }

    public function createPostData(Request $request)
    {
    	$posts = new Posts;
 
		$posts->title = $request->input('title');;
		$posts->description = $request->input('description');;
 
		$posts->save();

		// Read value from Model method
	    $postData = Posts::getPostData();

	    // Pass to view
	    return redirect()->back()->with('status','Post Created Successfully');
    }

    public function showEditPost($id)
    {
        $postData = Posts::find($id);
        return view('edit-post')->with("postData",$postData);;
    }

    public function updatePostData(Request $request, $id)
    {
        $postData = Posts::find($id);

        $postData->title = $request->input('title');
        $postData->description = $request->input('description');
        
        $postData->update();
        return redirect()->back()->with('status','Post Updated Successfully');
    }

    
}
