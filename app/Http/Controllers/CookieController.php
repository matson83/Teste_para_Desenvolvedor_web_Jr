<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cookie;

class CookieController extends Controller
{
    //
    public function index(){

        $pedidos = Cookie::all();


            return view('welcome',['pedidos' => $pedidos]);

    }

    public function fazerpedido(){

        return view('cookies.fazer-pedido');


    }

    public function store(Request $request){

        $pedidos = Cookie::all();

          $cookie = new Cookie;

          $cookie->sabor = $request->sabor;
          $cookie->quantidade = $request->quantidade;
          $cookie->nome = $request->nome;
          $cookie->endereco = $request->endereco;
          $cookie->troco = $request->troco;
          $cookie->contato = $request->contato;
          $cookie->se_sim = $request->se_sim;

          $cookie->save();

        


        return view('pedidos');
    }
}
