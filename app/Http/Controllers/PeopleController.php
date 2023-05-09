<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller {

    public function index(){
        $people = People::all();
       
        return view('people.index', ['people'=> $people]);
    }

    public function create(){
       
        return view('people.create');
    }

    public function store(Request $request){
       People::create($request->all());
       return redirect()->route('people-index');
    }

    public function edit($id){
        $people = People::where('id', $id)-> first();

        if(!empty($people)){
            return view('people.edit', ['people' => $people]);
        } else {
            return redirect()->route('people-index');
        }
    }


    public function update( Request $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        People::where('id', $id)->update($data);
        return redirect()->route('people-index');
    }


    public function destroy($id){
        People::where('id', $id)->delete();
        return redirect()->route('people-index');
    }
}
