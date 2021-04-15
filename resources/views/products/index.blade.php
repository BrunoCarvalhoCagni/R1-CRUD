@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<?php 
@session_start();
if(@$_SESSION['id_user'] == null){
  echo "<script language='javascript'> window.location='./' </script>";
}

if(!isset($id)){
  $id = "";
  
  
}
?>


<div class="container">
  @if($_SESSION['level_user'] == 'admin')
  <a href ="{{route('products.insert')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
  @endif
    <div class="mt-4 mb-4 row">
    @foreach($products as $product)
    <div class="col-3 text-center">
      <div class="card-deck">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{$product->picture}}" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">{{$product->name}}</p>
        <h5 class="card-title">R$ <?php $price_prod = number_format($product->price, 2, ',', '.'); echo $price_prod; ?></h5>
        <a href ="{{route('products.description', $product->id)}}" type="button" class="mt-4 mb-4 btn btn-primary">VER MAIS</a>
        <p></p>
        @if($_SESSION['level_user'] == 'admin')
        <a title = "Editar Produto" href="{{route('products.edit', $product)}}"><i class="fas fa-edit text-info mr-1"></i></a>
        <a  href="{{route('products.modal', $product)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
        @endif
      </div>
    </div>
    </div>
    </div>
    @endforeach
  </div>  
</div>


@if($products->count())
    <div class="row">
        <div class="col">
            {{ $products->links() }}
        </div>
    </div>
@endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        deseja realmente excluir este registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('products.delete', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div> 

<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?> 
@endsection

