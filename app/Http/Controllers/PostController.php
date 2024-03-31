<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function getAll($order='date', $dir='desc') : View
    {
    $posts = DB::table('posts')->orderBy($order, $dir)->get();
    return view('post.all',compact('posts'));
    }
    public function getOne($id)
    {
        $post = Post::find($id);
        if ($post == null)
        {
            $error='Такого поста не существует';
            return view('404',['error'=>$error]);
        }
        return view('post.one',compact('post'));
    }
    public function newPost(Request $request)
    {
        Post::create($request->all());
        return redirect('/post/all');
    }
    public function editPost(Request $request,$id)
    {
        $post =Post::find($id);
        if($request->method()=='POST')
        {
            $post->title= $request->title;
            $post->desc= $request->desc;
            $post->date= $request->date;
            $post->text= $request->text;
            $post->save();
            return redirect('/post/all');
        }
        return view('post.edit',['post'=>$post]);
    }
    public function delPost($id)
    {
        Post::find($id)->delete();
        return redirect('/post/all');
    }
}

