<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact',
            'name' => 'Glauco'
        ];
//        return view('partials/header', $data). view('Contact'). view('partials/footer');
////        // Os da direita herdam o array colocado na view, mas os da esquerda não herdam, por isso sempre colocar no primeiro.
///
        return view('contact', $data);
    }

    public function store()
    {
        $validated = false;
        if (!$validated){
//            return redirect()->back();
//            return redirect()->to('products');
            return redirect()->route('products');
        }

    }

}
