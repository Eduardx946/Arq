@extends('layouts.app')

@section('content')

<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto">ArqExplorer</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>


  </header><!-- #header -->


  <main id="main">

    <section id="contact" class="section-bg wow fadeInUp">
      
      <div class="container">
        <div class="section-header">
          <br><br><br><br>
          <h3>Cadastro</h3>
          <br><br><br>
        </div>
      </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form  method="POST" action="{{ url('/register') }}" role="form" class="contactForm">
                                    {{ csrf_field() }}

            <center>
              
              <div class="form-group col-md-6">
                <input  placeholder="Digite seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" 
                            id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"/>
                <div class="validation"></div>
              </div>
              
            
            <div class="form-group col-md-6">
              <input  placeholder="Digite seu email" data-rule="email" data-msg="Please enter a valid email" 
                            id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"/>
              <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">
              <input  placeholder="Digite sua senha" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" 
                            id="password" type="password" class="form-control" name="password"/>
              <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">
              <input placeholder="Confirme sua senha" id="password-confirm" type="password" class="form-control" name="password_confirmation"/>
              <div class="validation"></div>
            </div>
                                 @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
            </center>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Cadastrar
                                </button>
            </div>
            <br>
            <div class="text-center"><a href="{{ url('/login') }}">Já é registrado? Faça login</a></div>
          </form>
        </div>
        <br><br><br><br>
      </div>
    </section><!-- #contact -->

  </main>


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




@endsection
