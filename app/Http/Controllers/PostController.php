<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(Request $request){
        $query = $request->input('query');

        // Perform the search using the Post model
        $results = Post::where('title', 'like', '%' . $query . '%')
            ->orWhere('dis', 'like', '%' . $query . '%')
            ->get();
         $posts = Post::all();
        return view('welcome', compact('results', 'query','posts'));
        
    }
    function postadd(Request $request){
        Post::insert([
            'title' => $request->title,
            'user' => $request->user,
            'dis' => $request->dis,
            'status' => 0,
        ]);
        return back();
    }
    public function search(Request $request)
    {
        
    }
}
