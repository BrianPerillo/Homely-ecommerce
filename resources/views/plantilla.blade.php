<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/bootstrap-carrusel.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield("titulo")</title>
    <link rel="icon" href="/favicon.png" type="image/ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
  </head>
  <body>
  <div class="banner_negro">
    <p>¡Envíos y devoluciones gratuitas para todos los pedidos!</p>
    <ul>
      <a href="#"><li>ACERCA</li></a>
      <a href="#"><li>LLAMANOS (011) 5310-1450</li></a>
    </ul>
  </div>
  <header> <!-- Header segundo avance -->
   <div class="nav">
    <a href="{{ url('/index') }}"><h1 class="homely">/Homely\</h1></a>
    <nav id="categorias">
     <ul>
      <li><a href="{{ url('/categorias/sillas')}}">Sillas</a>
        <!-- <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="#">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul> -->
      </li>
      <li><a href="{{ url('/categorias/sillones')}}">Sillones</a>
        <!-- <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul> -->
      </li>
      <li><a href="{{ url('/categorias/mesas')}}">Mesas</a>
        <!-- <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul> -->
      </li>
      <li><a href="{{ url('/categorias/escritorios')}}">Escritorios</a>
        <!-- <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
        </ul> -->
      </li>
     </ul>
   </nav>
   <nav id="otros">
    <ul>
     <li id="pruebaa">
      <form class="search" action="/search" method="post">
          @csrf
        <fieldset>
         <input type="text" id="busqueda" name="busqueda">
         <button type="submit" name="button">
          <i class="fas fa-search"></i>
         </button>
        </fieldset>
      </form></li> <!--@@ a modo de prueba, despues se cambian por íconos -->
     <li id="menu_hamburguesa"><a href="#"><i class="fas fa-bars"></i></i></a></li>
     <li><a href="{{ url('/login') }}"><i class="fas fa-sign-in-alt"></i></a></li>
     @auth<li><a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i></a></li>@endauth
    </ul>
   </nav>
   </div>
  </header>
  <section>
    @yield("principal")
  </section>
  <footer class="footer">
<hr>
    <div class="footer-container">
      <div class="footer-newsletter">
        <h3>Suscribite</h3>
        <p>Recibí nuestro newsletter para conocer todas las últimas novedades y ofertas.</p>
        <div class="subscription-form">
          <form class="suscription" action="index.html" method="post">
            <label for="">
              <input type="text" name="" value="" placeholder="Email">
            </label>
            <button type="button" name="button">ENVIAR</button>
          </form>
        </div>
      </div>
    <div class="site-footer">
      <div class="link-list">
        <h5>AYUDA</h5>
        <ul class="links">
          <li><a href="{{ url('/faq') }}">Preguntas</a></li>
          <li><a href="{{ url('/products')}}">Productos</a></li>
          <li><a href="{{ url('/locations')}}">Sucursales</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h5>CUENTA</h5>
        <ul class="links">
          <li><a href="{{ url('/login') }}">Ingresar</a></li>
          <li><a href="{{ url('/register') }}">Registro</a></li>
          <li><a href="#">Ordenes</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h5>EMPRESA</h5>
        <ul class="links">
          <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="{{ url('/politica') }}">Política</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="social-media">
      <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=1653388260&extra_1=s%7Cc%7C318309252364%7Ce%7Cfacebook%7C&placement=&creative=318309252364&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1653388260%26adgroupid%3D61874672325%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1000073%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMIvI-jos6b5AIVhoaRCh3ljAvyEAAYASAAEgJmtvD_BwE" target="_blank"><img src="imgs/facebook-logo-button.svg" width="30px" height="30px" alt=""></a>
      <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" ><img src="imgs/twitter-logo-button.svg" width="30px" height="30px" alt=""></a>
      <a href="https://www.instagram.com/homelybsas/" target="_blank"><img src="imgs/instagram-logo.svg" width="30px" height="30px" alt=""></a>
      <a href="https://www.pinterest.cl/" target="_blank"><img src="imgs/pinterest-logo.svg" width="30px" height="30px" alt=""></a>
  </div>
  <hr>
  <p>© 2019, Homely.<br> Todos los derechos reservados.</p>
  </footer>
  </body>
  </html>
