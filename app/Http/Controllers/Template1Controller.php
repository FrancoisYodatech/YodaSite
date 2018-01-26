<?php

namespace yoda\Http\Controllers;

use Illuminate\Http\Request;

class Template1Controller extends Controller
{
    public function showArticle($no){
      return view('article')->withnumero($no);
    }

    public function showFacture($no){
      return view('facture')->withnumero($no);
    }
}
