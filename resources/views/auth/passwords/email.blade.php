@extends("plantilla")

@section("titulo")
  Preguntas
@endsection

@section("principal")
<div class="form-container">
  <div class="row justify-content-center">
    <div>
      <div class="card">
        <div class="card-header">
          <h2>{{ __('Enviar e-mail para blanqueo de contraseña') }}</h2>


        <div>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="field-group">
                            <label for="email">{{ __('E-Mail') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                            <div class="login-button">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENVIAR E-MAIL') }}
                                </button>
                            </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
