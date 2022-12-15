<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index() {
        $posts = Post::paginate(6);
        $user = Auth::user();

        return view ('pages.community', compact('posts', 'user'));
    }

    public function article() {
        $articles = Article::paginate(6);

        return view('pages.article', compact('articles'));
    }

    public function createPost(Request $request) {
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;
        $data['description'] = $request->content;
        $data['url'] = $request->url;

        Post::create($data);

        return redirect()->back();
    }

    public function deletePost($id) {
        $post = Post::where('id', $id)->first();;

        if(isset($post)) {
            $post->delete();
        }

        return redirect()->route('community');
    }

    public function showPostDetail($id) {
        $post = Post::find($id);

        return view('pages.postdetail', compact('post'));
    }

    public function showArticleDetail($slug) {
        $article = Article::where('slug', $slug)->first();

        return view('pages.articledetail', compact('article'));
    }
}
