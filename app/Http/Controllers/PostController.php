<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        $user = Auth::id();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $users=User::all();
       return view("post.create",compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
       // $data= $request->all();
       // Post::create($data);

       $request->validate(
           [
                  'title'=>['required','min:3'], 
                  'description'=>['required','min:5']
           ]
           );
       Post::create(
           [
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::id(),
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at
           ]
           );

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id',"=",$id)->first();
        return view("post.show",compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id',"=",$id)->first();
        return view("post.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                   'title'=>['required','min:3'], 
                   'description'=>['required','min:5']
            ]
            );
         $post= Post::find($id);
         $post->title=$request->title;
         $post->description=$request->description;
         $post->save();
         return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Post::destroy($id);
      return redirect('/posts');
    }
}
