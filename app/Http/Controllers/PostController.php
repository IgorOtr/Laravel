<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Método que retorna os dados do banco (SELECT)
     *
     * @param Post $post
     * @return void
     */

    public function index(Post $post)
    {

        $posts = $post->all();

        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('admin/post/create');
    }


    /**
     * Método que inserir os dados do banco (INSERT)
     *
     * @param Post $post
     * @return void
     */
    public function store(Request $request, Post $post)
    {

        $data = $request->all();
        $data['status'] = 'a';
        $data['post_image'] = 'cassiopalmeirense.jpg';

        $post = $post->create($data);
    }
}
