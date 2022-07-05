<?php

namespace App\Controllers;

class Home extends BaseController
{

    public $modelHome=NULL;

    public function __construct()
    {
        $this->modelHome = model('HomeModel');
    }

    public function index()
    {
        //$data = $this->modelHome->entidades_lst();
        //echo var_dump($data);
        return view('home');
        //return view('welcome_message');
    }

    public function test(){
        $valor = trim($this->request->getPost('valor'));
        $data = $this->modelHome->entidades_lst($valor);
        //return $data;
        //echo var_dump($data);
        //return json_encode($data);
        //echo var_dump($data);
        return json_encode($data);
        //return json_decode(json_encode($data), true);
    }
}
