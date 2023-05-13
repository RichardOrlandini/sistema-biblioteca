<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Book;
use App\Models\People; 

class LoanController extends Controller{

    public function index(){
        $loans = Loan::all();

        return view('loans.index', ['loans' => $loans]);
    }

    public function create() {

        return view('loans.create');
    }

    public function store(Request $request) {
        //NOTE: Changing book status.
        $book = Book::find($request->book_id);
        $people = People::find($request->people_id); 

        if($book == null){
            $msg = "O id do livro não existe";
            return view('loans.create')->with('msg', $msg); 
        } else if ($people == null){
            $msg = "O id da pessoa não existe";
            return view('loans.create')->with('msg', $msg); 
        }

        $book->status = $request->status;
        $book->save();
        Loan::create($request->all());
        return redirect()->route('loans-index');
    }

    public function edit($id){
        $loan= Loan::where('id', $id)-> first();
        $book = Book::find($loan->book_id);

        if($book == null){
            $msg = "Id do livro não existe";
            return view('loans.create', ['msg', $msg]);
        }

        $status = $book->status;
        $statusValue = 0;
        if($status == 1){
            $status = "Emprestado"; 
            $statusValue = 1;
        }else {
            $status = "Disponível";
            $statusValue = 0;
        }

        $delay = $loan->delay;


        if(!empty($loan)){
            return view('loans.edit', [
                'loan' => $loan, 
                'status' => $status, 
                'statusValue' => $statusValue,
                'delay' => $delay
            ]);
        } else {
            return redirect()->route('loans-index');
        }
    }


    public function update(Request $request, $id){
        $loan = Loan::find($id);
        $book = Book::find($request->book_id);

        $loan->return_date = $request->return_date;
        $loan->delay = $request->delay;
        $book->status = $request->status;

        $loan->save();
        $book->save();

        return redirect()->route('loans-index');
    }


    public function destroy($id){
        Loan::where('id', $id)->delete();
        return redirect()->route('loans-index');
    }
}
