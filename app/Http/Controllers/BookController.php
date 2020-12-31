<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelBook;

class BookController extends Controller
{
    private $ObjUser;
    private $ObjBook;

    public function __construct(){

        $this->ObjUser = new User();
        $this->ObjBook =  new ModelBook();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $books = $this->ObjBook->all(); //obtém todos os registros da tabela book
        /*$books = $this->ObjBook->all()->sortBy('name');//Ordenar por nome */
        /*$books = $this->ObjBook->all()->sortByDesc('id');//Ordenar o id por ordem decrecente */

        return view('pages.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->ObjUser->all();

        return view('pages.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //cadastrando um livro
    public function store(Request $request)
    {
        $cadastro = $this->ObjBook->create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_user'=>$request->id_user
        ]);
        
        if($cadastro){
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->ObjBook->find($id);

        return view('pages.view', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->ObjBook->find($id);
        $users = $this->ObjUser->all();

        return view('pages.edit', compact('book', 'users'));
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
        $this->ObjBook->where(['id'=>$id])->update([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_user'=>$request->id_user
        ]);

        return redirect()->route('home');

        //$input = array_except(\Request::all(),['_token','image']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = $this->ObjBook->find($id)->delete();

        return redirect()->route('home');
    }
}
