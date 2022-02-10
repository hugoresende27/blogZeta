<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Bem vindo ao meu blog !!!";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = "Acerca de mim";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $dados = array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($dados);;
    }
}
