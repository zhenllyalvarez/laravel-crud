<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service\MainService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function addBook(Request $request){
        return MainService::addBook($request);
    }

    public function getAllBook(){
        return MainService::getAllBook();
    }

    public function updateBook(Request $request){
        return MainService::updateBook($request);
    }

    public function deleteBook(Request $request){
        return MainService::deleteBook($request);
    }
}
