<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function cuerpo()
    {
        return view('templates/main_layout', [        
            'car' => view('components/carrousel'),
            'card' => view('components/cards'),         
        ]);
    }


    public function quienessomos()
    {
        return view('templates/main_layout', [            
            'who' => view('pages/quienessomos'),             
        ]);
    }

    public function comercializacion()
    {
        return view('templates/main_layout' , [ 
            'comerc' => view('pages/comerce'),
        ]);
    
    }

    public function inicio()
    {
        return view('templates/main_layout' , [
            'ini' => view('components/cabecera'),
        ]);
    }

    public function contacto()
    {
        return view('templates/main_layout', [
            'contact' => view('pages/contacto'),
        ]);
    }

    public function terminos()
    {
        return view('templates/main_layout', [
            'term' => view('pages/terminos')
        ]);
    }

}