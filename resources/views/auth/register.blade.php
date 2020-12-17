@extends("plantilla")

@section("titulo")
  Registrese
@endsection

@section("principal")
<div class="form-container">
    <div class="row justify-content-center">
        <div>
            <div class="">
                <div class=""><h2>{{ __('Crear cuenta') }}</h2></div>

                <div>
                    <form method="POST" class="access-form" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="field-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="field-group">
                            <label for="last_name">{{ __('Apellido') }}</label>
                            <div>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                          <label for="address">{{ __('Dirección') }}</label>
                          <div>
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>


                        <div class="field-group">
                            <label for="username">{{ __('Nombre de Usuario') }}</label>
                            <div>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <label for="email">{{ __('Email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <label for="avatar">{{ __('Foto de perfil') }}</label>

                            <div>
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="field-group">
                            <label for="country">{{ __('Pais') }}</label>

                            <div>
                                <select id="country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country">
                                <option value="">Seleccione un pais</option>
                                  </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <div id="state">
                            <label for="prov">{{ __('Provincia') }}</label>


                                <select id="prov" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{ old('prov') }}" autocomplete="prov">
                                <option value="">Seleccione una provincia</option>
                                  </select>
                                @error('prov')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <label for="password">{{ __('Contraseña') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>

                            <div>
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="register-button">
                                <button type="submit" >
                                    {{ __('ENVIAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js">

</script>
@endsection
