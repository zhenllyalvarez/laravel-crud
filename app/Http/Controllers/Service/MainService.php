<?php

namespace App\Http\Controllers\Service;

use App\Models\Book;
use Illuminate\Http\Request;

class MainService
{
    public static function addBook(Request $request){
        $add = new Book();
        $add->title = $request->title;
        $add->description = $request->description;

        $add->save();

        return Book::all();
    }

    public static function getAllBook(){
        return  Book::all();
    }

    public static function updateBook(Request $request){
        $update = Book::find($request->id);
        $update->title = $request->title;
        $update->description = $request->description;

        $update->save();

        return Book::all();
    }

    public static function deleteBook(Request $request){
        $delete = Book::find($request->id);
        $delete->delete();

        return Book::all();
    }
}
