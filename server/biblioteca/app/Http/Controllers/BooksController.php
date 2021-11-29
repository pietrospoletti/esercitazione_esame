<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function AllBooks(){
        return book::all();
    }

    public function AddBook(Request $request){
        $newBookData = json_decode($request->getContent());
        $newBook = new book();
        $newBook -> ISBN = $newBookData->ISBN;
        $newBook -> title = $newBookData->title;
        $newBook -> author =$newBookData->author;
        $newBook -> img = $newBookData->img;
        $newBook -> type = $newBookData->type;
        $newBook -> stars = $newBookData->stars;
        $newBook -> save();
        return $newBookData;
    }

    public function EditBook(Request $request, $id)
{
    $book = book::where('id',$id);
    $book->ISBN = $request->ISBN;
    $book->title = $request->title;
    $book->author = $request->author;
    $book->img = $request->img;
    $book->type = $request->type;
    $book->stars = $request->stars;
    $book->save();
}
}
