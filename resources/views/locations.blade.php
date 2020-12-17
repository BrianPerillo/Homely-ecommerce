@extends("plantilla")

@section("titulo")
  Sucursales
@endsection

@section("principal")
<h2 class="lora-h2">Sucursales</h2>
<div class="location-container">

  <div class="map-container">
    <div class="location-details">
      <div class="location">
        <h2>Arenales 1251</h2>
        <p>Tel (5411) 4813 4108</p>
        <p>Horarios:
      Lunes a Viernes de 10 a 20hs
      Sábados de 10 a 14hs</p>
      </div>
    </div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3849520611625!2d-58.387302984770564!3d-34.594426080461936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccab99728ace9%3A0x265a2634adaaf0a9!2sLandmark!5e0!3m2!1ses-419!2sar!4v1566659024641!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>

  <div class="map-container">
    <div class="location-details">
      <div class="location">
        <h2>Alcorta Shopping, Locales 03 y 05</h2>
        <p>Tel (5411) 4721 3025</p>
        <p>Horarios:
          Lunes a Viernes de 11 a 21hs
          Sábados de 10 a 21hs
        </p>
      </div>

    </div>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.162239672186!2d-58.40617958477106!3d-34.57476118046703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5656fad7395%3A0x64e3aba3d5290da6!2sAlcorta%20Shopping!5e0!3m2!1ses!2sar!4v1566661081751!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</div>




@endsection("principal")
