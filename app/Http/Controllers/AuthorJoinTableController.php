<?php

namespace App\Http\Controllers;

use App\Models\AuthorJoinTable;
use Illuminate\Http\Request;

class AuthorJoinTableController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($author_id, $book_id)
    {

        // $book = AuthorJoinTable::create([
        //     'book_id' => $book_id,
        //     'author_id' => $author_id
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorJoinTable  $AuthorJoinTable
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorJoinTable $authorJoinTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorJoinTable  $AuthorJoinTable
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorJoinTable $authorJoinTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorJoinTable  $AuthorJoinTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorJoinTable $authorJoinTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorJoinTable  $AuthorJoinTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorJoinTable $authorJoinTable)
    {
        //
    }
}
