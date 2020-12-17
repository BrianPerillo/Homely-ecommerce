@extends("plantilla")

@section("titulo")
  Categorias
@endsection

@section("principal")
<div class="products-container">
  <h2>Listado de Categorias</h2>
  <p>- Ingresar en cada categoria para ver los productos -</p>
  <hr>
    <ul>
      @foreach ($categories as $category)
        <li>
          <a href="/categorias/{{$category->name}}">{{$category->name}}</a>
          <hr>
        </li>
    @endforeach
    </ul>
  </div>

@endsection
