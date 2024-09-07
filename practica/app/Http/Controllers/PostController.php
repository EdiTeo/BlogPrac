<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Post;
class PostController extends Controller
{
    // Mostrar todas las publicaciones
public function index() {
    $posts = Post::orderBy('created_at', 'desc')->get();//obtiene todos los mensajes 
    return view('posts.index', ['posts' => $posts]);
  }
      
  // Crear publicaciones 
  public function create() {
    return view('posts.create');
  }
  //pubicaciones de la tienda
  public function store(Request $request) {
            
            $request->validate([
            'title' => 'required',
            'descripcion' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $post = new Post;
        
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
        
            $post->title = $request->title;
            $post->descripcion = $request->descripcion;
            $post->image = $file_name;
        
            $post->save();
            return redirect()->route('posts.index')->with('success', 'Post created successfully.');
  }
}
