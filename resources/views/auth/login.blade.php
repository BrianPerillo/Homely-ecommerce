@extends("plantilla")

@section("titulo")
  Inicie Sesión
@endsection

@section("principal")
<div class="form-container">
  <div class="">
    <div>
      <div class="">
        <div class="">
          <h2>{{ __('Iniciar Sesión') }}</h2>


        <div>
            <form method="POST" class="access-form" action="{{ route('login') }}">
                @csrf

                <div class="field-group">

                    <label for="email" class="field-group">{{ __('E-Mail') }}</label>

                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>



                <div class="field-group">

                    <label for="password" class="field-group">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="remember-me">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                      {{ __('Recordarme') }}
                  </label>
                </div>

            <div class="">

                      <div class="login-button">
                        <button type="submit" >
                            {{ __('INGRESAR') }}
                        </button>
                      </div>

                        @if (Route::has('password.request'))
                            <a class="login-links" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif

                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
