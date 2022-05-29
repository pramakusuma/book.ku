<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book',['books'=>$books,'layout'=>'index']);
    }

    public function showAll()
    {
        $books = Book::all();
        return view('book',['books'=>$books,'layout'=>'showAll']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('book',['books'=>$books,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->judul = $request->input('judul');
        $book->penulis = $request->input('penulis');
        $book->tahunterbit = $request->input('tahunterbit');
        $book->sinopsis = $request->input('sinopsis');
        $book->save();
        return redirect('/booklist/#booklist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $books = Book::all();
        return view('book', ['books'=>$books,'book'=>$book,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $books = Book::all();
        return view('book', ['books'=>$books,'book'=>$book,'layout'=>'edit']);
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
        $book = Book::find($id);
        $book->judul = $request->input('judul');
        $book->penulis = $request->input('penulis');
        $book->tahunterbit = $request->input('tahunterbit');
        $book->sinopsis = $request->input('sinopsis');
        $book->save();
        return redirect('/booklist/#booklist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/booklist/#booklist');
    }

    public function checkLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'username' => $request['username'],
            'password' => $request['password']
        );

        if(Auth::attempt($user_data)) {
            return redirect('/successlogin');
        } else {
            return back()->with('error', "Username/Password Salah");
        }
    }

    public function successlogin() {
        $books = Book::all();
        return view('loginbook',['books'=>$books,'layout'=>'index']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}