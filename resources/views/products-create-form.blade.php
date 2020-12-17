@extends("plantilla")

@section("titulo")
  Crear producto
@endsection

@section("principal")


<section class="form-container">
  <h2>Crear producto</h2>

  <form action="/products/store" method="post" enctype="multipart/form-data">
		@csrf

    <div class="field-group">
      <label for="name">Nombre</label>
      <input type="text"  id="name" name="name" value="{{ old('name') }}" class="">
      @if ($errors->has('name'))
        <p style="color: red;">{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div class="field-group">
      <label for="price">Precio</label>
      <input type="text" id="price" name="price" value="{{ old('price') }}" class="">
      @if ($errors->has('price'))
        <p style="color: red;">{{ $errors->first('price') }}</p>
      @endif
    </div>
    <div class="field-group">
      <label for="Color">Color</label>
      <select class="form-control" name="color_id">
      <option value="">Seleccione un color</option>
        @foreach ($colors as $color)
          <option value="{{ $color->id }}"> {{ $color->name }} </option>
        @endforeach
      </select>
      @if ($errors->has('color_id'))
        <p style="color: red;">{{ $errors->first('color_id') }}</p>
      @endif

    </div>
    <div class="field-group">
      <label for="Categoria">Categoria</label>
      <select class="form-control" name="category_id">
      <option value="">Seleccione una categoria</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}"> {{ $category->name }} </option>
        @endforeach
      </select>
      @if ($errors->has('category_id'))
        <p style="color: red;">{{ $errors->first('category_id') }}</p>
      @endif

    </div>
    <div class="field-group">
      <label for="dimension">Dimensión</label>
      <input type="text" id="dimension" name="dimension" value="{{ old('dimension') }}" class="" >
      @if ($errors->has('dimension'))
        <p style="color: red;">{{ $errors->first('dimension') }}</p>
      @endif
    </div>
    <div class="field-group">
      <label for="description">Descripción</label>
      <input type="text" id="description" name="description" value="{{ old('description') }}" class="" >
      @if ($errors->has('description'))
        <p style="color: red;">{{ $errors->first('description') }}</p>
      @endif
    </div>
    <div class="field-group">
           <label for="">Foto</label>
           <input type="file" name="photo" value="" class="">
           @error ('photo')
             <p style="color: red;">{{ $errors->first('photo') }}</p>
           @enderror
    </div>
  <div class="register-button">
      <button type="submit" name="send">GUARDAR</button>
    </div>
  </form>
  </section>
  @endsection
