<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController
{
    function home()
    {
        $books = Book::all();
        // $test = 'test';
        // dd($books);
        // var_dump($books);

        #cara pertama
        // return view('welcome', [
        //     $books
        // ]);

        #cara kedua
        // dd($books);
        // dd($category);
        return view('welcome', [
            'books' => $books
        ]);
    }

    function createViewPage()
    {

        return view('create', [
            'categories' => category::all()
        ]);
    }

    function createBook(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'stock' => $request->stock,
            'writer' => $request->writer,
            'category_id' => $request->category_id
        ]);

        return redirect(route('home'));
    }

    function updateViewPage($id)
    {
        // dd($id);
        // $book = DB::table('books')->select('*');
        // $books = Book::all();

        $book = Book::find($id);
        // dd($book);

        return view('update', [
            'book' => $book,
            'categories' => category::all()
        ]);
    }

    function updateBook(Request $request, $id)
    {
        // dd($request);
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'stock' => $request->stock,
            'writer' => $request->writer,
            'category_id' => $request->category_id
        ]);

        return redirect(route('home'));
    }

    function deleteBook($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect(route('home'));
    }
}
