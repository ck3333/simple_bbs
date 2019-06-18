<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);
        $param = [
            'user' => $user,
            'posts' => $posts,
        ];
        return view('posts.index', $param);
    }

    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();

        return redirect('/posts');
    }

    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post'=>$post]);
    }

    public function res(Request $request, $id)
    {
        $user = Auth::user();
        $post = Post::with('user')->find($id);
        $param = [
            'user' => $user,
            'post' => $post,
            'id' => $id,
        ];
        return view('posts.res', $param);
    }

    public function res_create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();

        return redirect('/posts');
    }

    public function delete(Request $request, $id)
    {
        $user = Auth::user();
        $post = Post::find($id);
        if ( $user->id == $post['member_id'] ) {
            $post = Post::find($id)->delete();
            return redirect('/posts')->with('delete', '投稿を削除しました');
        } else {
            return redirect('/posts');
        }
    }
}
