@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{ route('produtos.insert') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="" name="nome">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Estoque</label>
                        <input type="text" class="form-control" id="" name="estoque">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="" name="valor">
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="" name="descricao" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
