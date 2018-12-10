@extends('layouts.app')

@section('content')

	<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">ArqExplorer</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home.inicio')}}">Home</a></li>
          <li><a href="{{route('dev')}}">Sobre nós</a></li>
          <li><a href="{{route('galeria.inicio')}}">Galeria</a></li>
          <li><a href="{{route('feed.inicio')}}">Publicação</a></li>
          <li><a href="{{route('contato.inicio')}}">Contato</a></li>
          <li><a href="{{route('perfil.inicio')}}">Perfil</a></li>
          <li><a href="{{ url('/logout') }}">Sair</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >

      <div class="row" style="margin: 0px">

        <div class="section-header container">
          <h3>Perfil</h3>
          <br>
        </div>


        <div class="card col-lg-3 col-md-5 container">
        <div class="card-body">
          <p class="card-text text-center">Nome:{{ Auth::user()->name }} </p>
          <p class="card-text text-center">Email: {{ Auth::user()->email }} </p>
        </div>
        </div>
      </div>

      </section>

  <!--==========================
    Footer
  ============================-->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>ArqExplorer</h3>
            <p>Somos apenas um grupo de estudantes do curso Técnico em Informática do IFRN - Campus Caicó vivenciando uma longa jornada em busca do tão sonhado diploma, tropeçando em mil e uma displinas, principalmente nas técnicas, porque todos estamos no curso só de passagem. Que Deus nos ajude. </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="indexreal.html">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="desenvolvedores.html">Sobre nós</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              Endereço do IFRN <br>
              Caicó, RN 535022<br>
              Brasil <br>
              <strong>Phone:</strong> +55 84 9999-9999<br>
              <strong>Email:</strong> arqexplorer@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

      </div>
  </div>
</div>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>


	
@endsection