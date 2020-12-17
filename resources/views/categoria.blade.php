@extends("plantilla")

@section("titulo")
  Preguntas
@endsection

@section("principal")

    <main id="main_categoria">
        <section id="section_categoria">
          @foreach ($productos as $item)
              
          <article class="article_categoria"  data-id="{{ $item->id }}">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              {{ $item->name }} <span>${{ $item->price }}</span>
              <br>
              <form method="post" action="/cart/add/{{ $item->id }}">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/{{ $item->id }}">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/{{ $item->id }}">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
          </article>

          @endforeach

       
    </main>
    <aside id="aside_categoria">
        <h2>Productos del carrito (<span class="total">0</span>)(<span class="totalprecio">0</span>)</h2>
        <ul class="categoria">

        </ul>
    </aside>
    @endsection

    <script src="js/categoria.js"></script>
