<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $books = Books::withTrashed()
       // ->get();

       $books = Books::all();

       return view('books.index')
       ->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $books = new Books;
        $books->nombre = $request->nombre;
        $books->descripcion = $request->descripcion;
        $books->save();

        return "Se ha guardado tu libro";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::findOrfail($id);

        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $book = Books::findOrfail($id);
        $book-> nombre = $request->nombre;
        $book->descripcion = $request->descripcion;
        $book->save();

        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrfail($id);
        $book->delete();

        return [
            "message" => "El recurso ha sido borrado"
        ];
    }
}
