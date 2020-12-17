@extends("plantilla")

@section("titulo")
  Registrese
@endsection

@section("principal")

<div class="container justify-content-center">


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif



                      <div class="container-preguntas row justify-content-center">
                      <!--    *******************  TABS  *******************    -->
                          <div class="tabs justify-content-center">


<!--    ****************************************************************  56465465654     PRESTAÑA     6456465465465  *******************************************************************************    -->

                                          <input name="tabs" type="radio" id="tab-general" checked="checked" class="pestana"/>
                                          <label for="tab-general" class="label">Perfil</label>
                                          <div class="panel">
                                          <h1>Perfil</h1>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                        <br>
                                                        <p><b>Nombre: </b>{{ $dataUser->name }}</p>
                                                        <p><b>Apellido:</b> {{ $dataUser->last_name }}</p>
                                                        <p><b>Email:</b> {{ $dataUser->email }}</p>
                                                        <p><b>Dirección:</b> {{ $dataUser->address }}</p>
                                                  </div>

                                                <div class="col-lg-4 pull-lg-8 text-xs-center">
                                                      <img src="/storage/{{ $dataUser->avatar }}" class="m-x-auto img-fluid img-circle" alt="avatar">


                                                </div>

                                                </div>
                                          </div>

<!--    ****************************************************************  56465465654     PRESTAÑA     6456465465465  *******************************************************************************    -->

                                        <!--   <input name="tabs" type="radio" id="tab-compras" class="pestana"/>
                                          <label for="tab-compras" class="label">Carrito</label>
                                          <div class="panel">
                                          <h1>Carrito</h1>








                                          </div>-->


<!--    ****************************************************************  56465465654     PRESTAÑA     6456465465465  *******************************************************************************    -->
                                          <input name="tabs" type="radio" id="tab-pagos" class="pestana"/>
                                          <label for="tab-pagos" class="label">Editar</label>
                                          <div class="panel">
                                          <h1>Editar Datos</h1>

                                                    <!--    *************************************************  CARD USER/EDIT  ****************************************************************    -->




                                                          <div class="container py-3">
                                                              <div class="row">
                                                                  <div class="mx-auto col-sm-6">

                                                                    <form method="POST" class="access-form" action="/home/{{$dataUser->id}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                          {{ method_field('put') }}

                                                                        <div class="field-group">
                                                                            <label for="name">{{ __('Nombre') }}</label>
                                                                            <div>
                                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $dataUser->name }}" autocomplete="name" autofocus>

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
                                                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$dataUser->last_name}}" autocomplete="last_name" autofocus>

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
                                                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$dataUser->address}}" autocomplete="address" autofocus>

                                                                            @error('address')
                                                                            <span class="invalid-feedback" role="alert">
                                                                              <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                          </div>
                                                                        </div>





                                                                        <div class="field-group">
                                                                            <label for="country">{{ __('Pais') }}</label>

                                                                            <div>
                                                                                <select id="country" class="form-control @error('country') is-invalid @enderror" name="country"  autocomplete="country">
                                                                                <option value="{{$dataUser->country}}">{{$dataUser->country}}</option>
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


                                                                                <select id="prov" class="form-control @error('prov') is-invalid @enderror" name="prov" autocomplete="prov">
                                                                                <option  value="{{$dataUser->state}}">{{$dataUser->state}}</option>
                                                                                  </select>
                                                                                @error('prov')
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
                                                          <!--    *************************************************  CARD USER/EDIT  ****************************************************************    -->




                                          </div><!--    *******************  /CIERRE PANEL3 *******************    -->


                                      </div><!--    *******************  /TABS  *******************    --><!--    *******************  /TABS  *******************    --><!--    *******************  /TABS  *******************    -->
  <!--    ****************************************************************  56465465654     //PRESTAÑAS FIN     6456465465465  *******************************************************************************    -->
</div> <!--    ************// DIV CONTAINER PREGUNTAS**********    -->




        <!--    ************ carrito link profile **********    -->
          <div class="profile-button" aria-labelledby="">
                <button> <a class="" name="send" href="{{ url('/cart') }}">
                 {{ __('Carrito') }}
              </a>
              </button>
          </div>
        <!--    ************ carrito link profile **********    -->




        <!--    ************ LOGOUT BUTTON **********    -->
          <div class="profile-button" aria-labelledby="">
                <button> <a class="" name="send" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                 {{ __('Cerrar Sesión') }}

              </a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        <!--    ************ LOGOUT BUTTON **********    -->



</div>

<script type="text/javascript" src="js/main.js">

</script>
@endsection
