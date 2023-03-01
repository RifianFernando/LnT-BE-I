<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookControllerApi
{
    public function test()
    {
        $books = Book::all();

        return response()->json([
            'state' => $books[0],
        ]);
    }

    function createBook(Request $request, AuthorJoinTableController $AuthorJoinTableController)
    {
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

        // $AuthorJoinTableController->create($request->author_id, $book->id);


        // DB::table('books')->create([
        //     'title' => $request->title,
        //     'stock' => $request->stock,
        //     'writer' => $request->writer,
        //     'category_id' => $request->category_id
        // ]);

        return response()->json([
            'success'=> 'berhasil ke create'
        ], 200);
    }

    function updateBook(Request $request, $id)
    {
        // dd($request->file('image'));
        // $required = 'required';
        // $request->validate([
        //     'title' => $required,
        //     'stock' => $required,
        //     'category_id' => $required,
        //     'author_id' => $required,
        //     'bookImg' => 'required|mimes:jpeg,jpg,gif,png'
        // ]);

        $img = $request->file('bookImg')->getClientOriginalName();
        $newNameBookImg = Str::random(10) . '_' . $img;
        $request->file('bookImg')->storeAs('public/', $newNameBookImg);

        // dd($request);
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'author_id' => $request->category_id,
            'bookImg' => $newNameBookImg
        ]);

        return response()->json([
            'success'=> 'berhasil update data'
        ], 200);
    }

    public function deleteBook($id){
        Book::find($id)->delete();

        return response()->json([
            'success' => 'berhasil di delete'
        ], 200);
    }
}
