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
          <br><br><br><br><br>
          <h3>Login</h3>
          <br><br><br>
        </div>
      </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form method="POST" action="{{ url('/login') }}"ole="form" class="contactForm">
             {{ csrf_field() }}
            <center>
            <div class="form-group col-md-6">
              <input  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" 
                            id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"/>
              <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">
              <input  placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" 
                            id="password" type="password" class="form-control" name="password"/>
              <div class="validation"></div>
            </div>
            </center>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
            </div>
            <br>
            <div class="text-center"><a href="{{ url('/register') }}">Não é registrado? Cadastre-se</a></div>
          </form>
        </div>
        <br><br><br><br><br><br>
      </div>
    </section><!-- #contact -->

  </main>



@endsection
