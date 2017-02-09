<?php
    require_once('include/header.php');
    require_once('include/gen_functions.php');
?>


  <body class="welcome-page animated fadeIn" style="text:#000">


  <nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TamilDating</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">New here ? <a href="#"><b>Join Us</b></a></p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
              <!--  Login via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                                or-->
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

    <div class="row-welcome" style="background-image: url('img/Post/home-bg.jpg');">

      <div class="row-body">

        <div class="welcome-inner">

          <!-- welcome message -->

          <div class="welcome-message welcome-text-shadow" style="text:#000;">


            <div class="welcome-about">
                 You are most welcome to this site. This site is trusted many girls in tamilnadu. <br />
                 They will find a boyfriend from this site. Please read <a href="terms_and_cond.php"> terms and condition </a> 
                 if you wanted to be a member.
            </div>                        

          </div><!-- end welcome message-->

          <!-- register and login form-->


          <div class="welcome-inputs hidden" >
            <div class="widget panel-inputs panel-home animated fadeInUp">

              <div class="widget-header">

                <h3 class="widget-caption">


                  <center>  <p class="text-center">Register here!</p> <center>


                </h3>

              </div>

              <div class="widget-body">

                <div class="row">

                  <form action="" method="POST" autocomplete="off">

                    <input type="text" id="short" name="" placeholder="Username">

                    <input type="password" id="short" name="" placeholder="Password">

                    <input type="text" id="short" name="email" placeholder="Email">

                    <input type="text" name="captcha" placeholder="Captcha">

                    <button type="submit" name="register" class="btn btn-danger">

                      <i class="fa fa-user-plus"></i>

                      Register

                    </button>

                  </form>
                  <div class="row col-md-22">

                    <form action="" method="POST" autocomplete="off">

                      <input type="text" id="short" name="" placeholder="Username or email">

                      <input type="password" id="short" name="" placeholder="Password">

                      <!--<input type="checkbox" name="remember" value="1">-->

                      <a type="submit" href="profile.html" name="login" class="btn btn-danger">Login</a>

                      <span class="forgot-password-link">

                        <a href="#">Forgot your password?</a><br>

                      </span>

                    </form> 

                  </div>
                </div> 

              </div>

            </div>

          </div><!-- end register and login form -->

        </div>

      </div>

    </div>



    <div class="welcome-full animated fadeInLeft">
      <div class="row col-md-22">

        <form action="" method="POST" autocomplete="off">

          <input type="text" id="short" name="" placeholder="Username or email">

          <input type="password" id="short" name="" placeholder="Password">

          <!--<input type="checkbox" name="remember" value="1">-->

          <a type="submit" href="profile.html" name="login" class="btn btn-danger">Login</a>

          <span class="forgot-password-link">

            <a href="#">Forgot your password?</a><br>

          </span>

        </form> 

      </div>

      <div class="row-body">

        <!-- some registered users -->

        <div class="welcome-users-inner">

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_men.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_men.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_women.jpg" class="img-circle" />

            </a>

          </div>

          <div class="welcome-user">

            <a href="profile.html">

              <img src="img/avatar/default_men.jpg" class="img-circle" />

            </a>

          </div>

        </div><!-- some registered users -->

      </div>

    </div>

<?php
    require_once('include/footer.php');
?>
