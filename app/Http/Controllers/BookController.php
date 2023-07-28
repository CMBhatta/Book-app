<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = book::all();
        return view('books.index',['books'=>$books]);
    }
    public function show($id)
{
    $book = Book::find($id);
    return view('books.show',compact('book'));
}
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
        'author'=> 'required']);
        $newBook = Book::create($data);
        return redirect(route('book.index'));

    }
    public function edit(Book $book){
        return view('books.edit',['book'=> $book]);

    }
    public function update(Book $book, Request $request){
        $data = $request->validate(['name'=> 'required',
        'author'=> 'required']);
       $book->update($data);
       return redirect(route('book.index'))->with('success','Book updated successfully');

    }
    public function destroy(Book $book){
        $book -> delete();
        return redirect(route('book.index'))->with('success','Book deleted successfully');

    }
}
