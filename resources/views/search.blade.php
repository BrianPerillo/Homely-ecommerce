@extends("plantilla")

@section("titulo")
  Productos
@endsection

@section("principal")

  <div class="banner-prod">
    <div class="banner-h2">
      <h2 class="lora-h2">Resultados de la búsqueda</h2>
    </div>
  </div>
  <div class="products-container">
    <ul class="container-vista">

            @forelse ($resultado as $product)
            <li>

              <div class="vista-producto">
                <a href="/products/{{$product->id}}"><img src="/storage/{{ $product->photo }}" class="product-photo"></a>
                <a href="/products/{{$product->id}}">{{$product->name}}</a>
                <a href="/products/{{$product->id}}"><p class=prod-price>${{ $product->price }}</p></a>
              </div>

            </li>
            @empty

            <p>No hay resultados posibles..</p>

            @endforelse


    </ul>
  </div>

@endsection
