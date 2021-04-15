@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('products.editRequest', $product)}}">
        @csrf
        @method('put');
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$product->name}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" class="form-control" id="" name="valor" value="{{$product->price}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Estoque</label>
                    <input type="text" class="form-control" id="" name="estoque" value="{{$product->stock}}">
                </div>
            </div>
        </div>




        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="" name="descricao" rows="3">{{$product->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection