<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller{
    public $title = '';
    public $description = '';
    public $articles = [
        ['id'=> 0, 'title'=>'primo articolo', 'description'=>'descrizione primo articolo'],
        ['id'=> 1, 'title'=>'secondo articolo', 'description'=>'descrizione secondo articolo'],
        ['id'=> 2, 'title'=>'terzo articolo', 'description'=>'descrizione terzo articolo'],
        ['id'=> 3, 'title'=>'quarto articolo', 'description'=>'descrizione quarto articolo']];


    public function index() {
        $this->title= 'Articoli';
        $this->description= 'Lorem ipsum sit dolor est amen';
        $articles=$this->articles;
        return view('articoli', compact('articles'),['title'=>$this->title,'description'=>$this->description,]);
    }

    public function show($id){
    if(array_key_exists($id, $this->articles)){
        $article=$this->articles[$id];
        return view('articolo',compact('article'));
    }else{
        abort(404);
    }  
}
}
