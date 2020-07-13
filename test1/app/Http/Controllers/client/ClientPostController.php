<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class ClientPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= $this->getVerifiedPosts();
        $tags=Tag::all();

//       dd($post);
//        $post= Post::all();
//        $author = Post::find('$id)->user->name;

//        $user = User::find();
//        $author= $post->author;

        return view('client.posts.index',['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $tags=Tag::all();

        return view('client.posts.create',['users'=>$user,'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post -> title = $request['title'];
        $post-> content= $request['content'];
        $post -> author=$request['author'];
        $post->save();
        $post->tags()->sync($request->tags);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
//        $post= $this->getVerifiedPosts()->find($id);

        return view('client.posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post -> title = $request['title'];
        $post-> content= $request['content'];
//        $post -> author=$request['author'];


        $post->save();
        return  redirect('client/clientPosts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        $post -> delete();
    }
    private  function getVerifiedPosts(){
        return Post::VerifiedPosts()->get();
    }
}
