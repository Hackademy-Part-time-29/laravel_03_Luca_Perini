<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $title = '';
    public $description = '';

    public function homePage() {
        $this->title= 'Homepage';
        $this->description= 'Lorem ipsum sit dolor est amen';
        return view('homepage',[
            'title'=>$this->title,
            'description'=>$this->description,
        ]);
    }

    public function chiSiamo() {
        $this->title= 'Chi Siamo';
        $this->description= 'Lorem ipsum sit dolor est amen';
        return view('chi-siamo',[
            'title'=>$this->title,
            'description'=>$this->description,
        ]);
    }

    public function servizi() {
        $this->title= 'Servizi';
        $this->description= 'Lorem ipsum sit dolor est amen';
        return view('servizi', [
            'title'=>$this->title,
            'description'=>$this->description,
        ]);
    }
}
