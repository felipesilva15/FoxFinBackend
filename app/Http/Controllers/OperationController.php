<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;

class OperationController extends Controller
{
    public function index(){
        return response()->json(Operation::all());
    }

    public function show($id){

    }

    public function store(Request $request){

    }

    public function update(Request $request){
        
    }

    public function destroy($id){

    }
}
