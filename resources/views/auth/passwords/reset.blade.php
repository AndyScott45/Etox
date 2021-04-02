<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="7GtOvBU4pm4trfrzDTMshF807LUBZdeYDHQPOEBJ">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

   <!--Fonts-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="assets/fonts/simple-line-icons.css">    

    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/settings.css">

 <!-- Color CSS Styles  -->
 <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body>

  <!-- Header area wrapper starts -->
  <header id="header-wrap">

  <!-- Roof area starts -->
      
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50" style="background-color: #FFBD33;">
          <div class="container">
            <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
              ☰
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/index') }}">
            <img src="assets/img/etox.png" class="w3-border" alt="etox">
            </a>
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="{{ url('/index') }}"   role="button" aria-haspopup="true" aria-expanded="false">Home</a>                  
                </li>                                     
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Pages
                  </a>
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="{{ url('/about-us') }}">About Us</a>
                    <a class="dropdown-item" href="{{ url('/team-page') }}">Diabetes mellitus</a>
                    <a class="dropdown-item" href="{{ url('/services') }}">Hypertension</a>                            
                    <a class="dropdown-item" href="{{ url('/404') }}">404</a>
                  </div>

                </li>             
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Shortcodes 
                  </a>


                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">                    Portfolio
                  </a>                   
                </li>
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                  </a>
                </li>   
                
             <!-- Authentication Links -->

                <li class="nav-item dropdown">
                <a class="nav-link loginPage" href="{{ url('/login') }}"   role="button" aria-haspopup="true" aria-expanded="false">login
                </a>                                   
                </li> 

                
                <li class="nav-item dropdown">
                <a class="nav-link loginPage" href="{{ url('/register') }}"   role="button" aria-haspopup="true" aria-expanded="false">Register
                </a>                                   
                </li> 

                <!-- Search in right of nav -->
                <li class="nav-item" class="search">
                  <form class="top_search clearfix">
                    <div class="top_search_con">
                      <input class="s" placeholder="Search Here ..." type="text">
                      <span class="top_search_icon"><i class="icon-magnifier"></i></span>
                      <input class="top_search_submit" type="submit">
                    </div>
                  </form>
                </li>
                <!-- Search Ends -->                  
              </ul>  
            </div>              
              <!-- Form for navbar search area -->
              <form class="full-search">
                <div class="container">
                  <input type="text" placeholder="Type to Search">
                  <a href="#" class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                  </a>
                </div>
              </form>
              <!-- Search form ends -->
          </div>
        </nav>
        <!-- Navbar Ends -->
        </section> 

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    
                    <form method="POST" action="http://127.0.0.1:8000/password/email">
                        <input type="hidden" name="_token" value="7GtOvBU4pm4trfrzDTMshF807LUBZdeYDHQPOEBJ">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>


