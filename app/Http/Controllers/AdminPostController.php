<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(7)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    
    public function store()
    {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails') 
        ]));

        return redirect('/')->with('success', '記事を作成しました。');
    }

    public function edit(Post $post)
    {
        return view('admin/posts/edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', '記事が更新されました!');
    }

    public function destroy(Request $request ,Post $post)
    {   
        $post = Post::findOrFail($request->id);

        $post->delete();

        return back()->with('success', '記事を削除しました。');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate([
            'title' => 'required|max:20',
            'thumbnail' => $post->exists ? ['image'] : ['image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post), 'alpha_dash' , 'lowercase', 'max:10'],
            'excerpt' => 'required|max:40',
            'body' => 'required|max:500',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

    }
}
