<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use PharIo\Manifest\Author;
use App\Models\author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class BookController
{

    function home()
    {
        $books = Book::all();
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
            'categories' => category::all(),
            'authors' => author::all()
        ]);
    }

    function createBook(Request $request, AuthorJoinTableController $AuthorJoinTableController): RedirectResponse
    {
        // dd($request->bookImg);
        $required = 'required';
        $request->validate([
            'title' => $required,
            'stock' => $required,
            'category_id' => $required,
            'author_id' => $required,
            'bookImg' => 'required|mimes:jpeg,jpg,gif,png'
        ]);

        $img = $request->file('bookImg')->getClientOriginalName();
        $newNameBookImg = Str::random(10) . '_' . $img;
        $request->file('bookImg')->storeAs('public/', $newNameBookImg);

        // dd($newNameBookImg);

        $book = Book::create([
            'title' => $request->title,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'bookImg' => $newNameBookImg
        ]);

        $AuthorJoinTableController->create($request->author_id, $book->id);


        // DB::table('books')->create([
        //     'title' => $request->title,
        //     'stock' => $request->stock,
        //     'writer' => $request->writer,
        //     'category_id' => $request->category_id
        // ]);

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
            'category_id' => $request->category_id
        ]);

        return redirect(route('home'));
    }

    function deleteBook($id)
    {
        $book = Book::find($id);
        // dd($book);
        $book->delete();

        return redirect(route('home'));
    }
}
