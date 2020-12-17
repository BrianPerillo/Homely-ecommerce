@extends("plantilla")

@section("titulo")
  Carrito
@endsection

@section("principal")

  <div class="banner-prod">
    <div class="banner-h2">
      <h2 class="lora-h2">Mi carrito</h2>
    </div>
  </div>
  <div class="products-container">
    <ul class="container-vista">

      @forelse ($carrito as $producto)

      <li >
          <div class="vista-producto">
            <a href="/products/{{$producto->id}}"><img src="/storage/{{ $producto->photo }}" class="product-photo"></a>
            <a href="">Producto: {{ $producto->name}}</a>
            <a href=""><p class=prod-price>Precio: ${{ $producto->price }}</p></a>
          </div>
      </li>


      <div class="edit-delete-product">

        <form action="/cart/{{ $producto->id }}" method="post">
          @csrf
          <!-- Decimos que aunque en el formulario tengamos metodo post, vamos a usar delete: -->
          {{ method_field('delete') }}
          <div class="delete-button">
            <button type="submit" name="send">Borrar producto</button>
          </div>
        </form>


      </div>
      @empty

    <p>  No tiene productos en el carrrito..</p>

      @endforelse

    </ul>

    @php $sum = 0; @endphp
    @foreach($carrito as $producto)

       @php $sum += $producto->price; @endphp
    @endforeach


    <p>Precio Total de tu Carrito: ${{ $sum }}</p>
  </div>


  <div class="edit-delete-product">

    <form action="#" method="post">
      @csrf
      <!-- Decimos que aunque en el formulario tengamos metodo post, vamos a usar delete: -->

      <div class="delete-button">
        <button type="submit" name="send">Finalizar compra</button>
      </div>
    </form>


  </div>


@endsection


{{-- los a tenian en href lo siguiente: /products/{{$product->id}} --}}
{{-- la img en src tenia lo siguiente: /storage/{{ $product->photo }} --}}
