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



    /**
     * Método responsável por retornar a renderização da view para criar um post
     *
     * @return void
     */
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
        $data['post_author'] = 'Igor Otero Muniz';
        $data['post_image'] = 'cassiopalmeirense.jpg';

        $post->create($data);

        return redirect()->route('home.index');
    }



    /**
     * Método para retornar os dados do banco que tenham
     * o ID igual ao ID passado na URL (SELECT)
     *
     * @param string|integer $id
     * @return void
     */
    public function show(string|int $id)
    {
        $details = Post::find($id);

        if(!$details){
            return back();
        }

        dd($details);
    }

    

    public function redirectToHome()
    {
        return redirect()->route('home.index');
    }
}
