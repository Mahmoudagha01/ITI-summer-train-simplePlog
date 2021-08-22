<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all();
       
        return $posts;
    }
    public function show($id)
    {
        $post = Post::where('id',"=",$id)->first();
        return $post;

    }
    public function destroy($id)
    {
      Post::destroy($id);
      
    }
    public function store(request $request)
    {
       Post::create($request->all());
       

        
    }

}
