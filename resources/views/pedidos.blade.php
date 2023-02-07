@extends('layouts.main')

@section('titulo','Rita Cookies - Pedidos')

@section('conteudo')

@foreach ($pedidos as $pedido )
<div class="pedidos-realizados">
    <h4>{{$pedido->sabor}}--{{$pedido->quantidade}}--{{$pedido->nome}}--{{$pedido->endereco}}--{{$pedido->contato}}--{{$pedido->troco}}--{{$pedido->se_sim}}</h4>
</div>
@endforeach



@endsection
