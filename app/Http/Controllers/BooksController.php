<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller {

    public function index(){
        $books = Book::all();
       
        return view('books.index', ['books'=> $books]);
    }

    public function create(){
       
        return view('books.create');
    }

    public function store(Request $request){
        
       Book::create($request->all());
       return redirect()->route('books-index');
    }

    public function edit($id){
        $book = Book::where('id', $id)-> first();

        if(!empty($book)){
            return view('books.edit', ['book' => $book]);
        } else {
            return redirect()->route('books-index');
        }
    }


    public function update( Request $request, $id){
        //$gender = $request->gender;
        //dd($gender);

        $data = [
            'name' => $request->name,
            'author' => $request->author,
            'value' => $request->value,
            'gender' => $request->gender,
        ];

        Book::where('id', $id)->update($data);
        return redirect()->route('books-index');
    }


    public function destroy($id){
        Book::where('id', $id)->delete();
        return redirect()->route('books-index');
    }
}
