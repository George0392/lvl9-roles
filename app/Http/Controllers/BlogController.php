<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog; 

class BlogController extends Controller
{

     public function __construct()
    {

    // permisos de ver    
    $this->middleware( 'permission: ver-blog | crear-blog | editar-blog | borrar-blog')->only('index');

    // permisos de crear
    $this->middleware( 'permission: crear-blog', ['only'=>['create','store']] );

    // permisos de crear
    $this->middleware( 'permission: editar-blog', ['only'=>['update','edit']] );

    // permisos de borrar
    $this->middleware( 'permission: borrar-blog', ['only'=>['destroy']] );

    }
    
    public function index()
    {
        $blog = Blog::paginate();
        return view('Blog.index', compact('blog'));
    }


    public function create()
    {
        return view('Blog.create');
    }


    public function store(Request $request)
    {
       request()->validate([
        'titulo'    => 'required',
        'contenido' => 'required'
       ]);

       Blog::create($request->all());
       return redirect()->route('Blog.index')
    }


    public function show($id)
    {
        //
    }


    public function edit(Blog $blog)
    {
        return view('Blog.edit',compact('blog'));
    }


    public function update(Request $request, Blog $blog)
    {
        request()->validate([
        'titulo'    => 'required',
        'contenido' => 'required'
       ]);
        $blog->update($request->all());
        return redirect()->route('Blog.index')
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('Blog.index')

    }
}
