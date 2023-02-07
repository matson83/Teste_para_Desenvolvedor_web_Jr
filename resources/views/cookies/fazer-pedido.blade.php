@extends('layouts.main')

@section('titulo','Rita Cookies - Fazer Pedido')

@section('conteudo')



    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Faça o seu Pedido:</h1>
        <form action="/cookies/fazer-pedido" method="POST">
            @csrf
            <div class="grupo-form">
                <h3>Sabor:</h3>
                <input type="checkbox" id="sabor-tr" name="sabor" value="Tradicional">
                    <label for="sabor-tr">Cookie Tradicional</label><br>
                <input type="checkbox" id="sabor-br" name="sabor" value="Tradicional">
                    <label for="sabor-br">Cookie Branco</label><br>
                <input type="checkbox" id="sabor-nt" name="sabor" value="Tradicional">
                    <label for="sabor-nt">Cookie Nutella</label><br>
                <input type="checkbox" id="sabor-dq" name="sabor" value="Tradicional">
                    <label for="sabor-dq">Cookie Disquete</label><br>
                <input type="checkbox" id="sabor-or" name="sabor" value="Tradicional">
                    <label for="sabor-or">Cookie Oreo</label><br>
            </div>
            <div class="grupo-form">
                <h3>Quantidade:</h3>
                    <textarea id="quantidade" name="quant" rows="4" cols="50" value=></textarea>

            </div>
            <div class="grupo-form">
                <h3>Nome:</h3>
                    <input type="text" id="nome">

            </div>
            <div class="grupo-form">
                <h3>Endereço:</h3>
                <textarea id="endereco" name="end" rows="4" cols="50"></textarea>


            </div>
            <div class="grupo-form">
                <h3>Contato:</h3>
                    <input type="text" id="contato">

            </div>
            <div class="grupo-form">
                <h3>Troco:</h3>
                    <input type="radio" name="troco-s" id="troco-sim">
                        <label for="troco-s">Sim</label><br>
                    <input type="radio" name="troco-n" id="troco-nao">
                        <label for="troco-n">Não</label>

            </div>
            <div class="grupo-form">
                <h3>Se sim , para quanto?:</h3>
                <input type="text" id="Quanto-troco">

            </div>

            <input type="submit" class="btn btm-primary" value="Confirmar">
        </form>
    </div>


@endsection
