@extends("plantilla")

@section("titulo")
  {{$productDetail->name}}
@endsection

@section("principal")
<div class="prod-container">
    <img src="/storage/{{ $productDetail->photo }}" class="product-photo">
  <div class="product-details">
    <h2>{{ $productDetail->name }}</h2>
    <hr>
    <p class=prod-price>${{ $productDetail->price }}</p>
    <div class="prod-features">
      <ul>
        <li><p><span>Color:</span> {{ $productDetail->color ? $productDetail->color->name : 'Sin color especificado' }}</p></li>
        <li><p><span>Medidas: </span> {{ $productDetail->dimension }}</p></li>
        <li><p><span>Descripción: </span> {{ $productDetail->description }}</p></li>
      </ul>
    </div>

@auth
<div class="edit-delete-product">
  <form method="post" action="/cart/add/{{ $productDetail->id }}">
  @csrf
  <div class="delete-button">
    <button class="">Agregar al carrito</button>
  </div>
  </form>
  <form action="/products/{{ $productDetail->id }}" method="post">
    @csrf
    <!-- Decimos que aunque en el formulario tengamos metodo post, vamos a usar delete: -->
    {{ method_field('delete') }}
    <div class="delete-button">
      <button type="submit" name="send">Borrar producto</button>
    </div>
  </form>
    <a href="/products/edit/{{ $productDetail->id }}" class="edit-product">Editar producto</a>

</div>
@endauth

  </div>

</div>

@endsection
