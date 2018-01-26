<?php

namespace yoda\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
      return view('usersForm');
    }

    public function store(Request $request){
      return 'Le nom est ' . $request->input('inputNom');
    }
}
