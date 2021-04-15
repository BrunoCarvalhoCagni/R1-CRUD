@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php
$price_prod = number_format($product->price, 2, ',', '.');

?>

<div class="jumbotron">
  <img src="{{$product->picture}}" class="img-fluid" alt="Responsive image">
  <h1 class="display-4"><?php echo $product->name; ?></h1>
  <p class="lead"><?php echo $product->description; ?> - Valor R$ <?php echo $price_prod; ?></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="{{route('products')}}" role="button">Ver products</a>
</div>  
@endsection