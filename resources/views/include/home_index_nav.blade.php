<!--Header Starts-->    
<header class="layout_first">
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default bootsnav">
          <div class="topbar yellow_bg">
              <!-- <span class="call">Telegram: <a href="https://t.me/flexytrading1">https://t.me/flexytrading1</a> </span> -->
              <span class="call">Email: <a href="mailto:?{{ config('app.admin_mail') }}"><span class="__cf_email__" >{{ config('app.admin_mail') }}</span></a></span>
              <span class="call">Mon - Sun  8.00 - 20.00</span>
          </div>
          <div class="attr-nav">
              <a class="scrolling getquote btn-dark text-uppercase border_radius" href="register">Get Started</a>
          </div>
           <div class="attr-nav">
              <a class="scrolling getquote btn-dark text-uppercase border_radius" href="login">Login</a>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header clearfix">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
              <a class="navbar-brand" href="index"><img style="width:160px; height:50px;" src="{{ asset('assets/img/logo.png') }}" class="logok" alt=""></a>
          </div>
          <!-- End Header Navigation -->
          
          <!-- nav links -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut">
              <li class=" ">
                  <a href="index" class="border">Home</a>
              </li>
              <li class=" "><a href="about" class="border">About Us</a></li>
              <li class=" ">
                  <a href="faq" class="border">FAQ
                </a>
              </li>
               <li class=" ">
                  <a href="investment_plan" class="border">Investment Plan
                </a>
              </li>
              <li class=" ">
                  <a href="login" class="border">Login
                </a>
              </li>
              <li class=" ">
                <a href="contact" class="border">Contact Us
                </a>
              </li>
            </ul>    
          </div>
          <!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!--HEADER Ends-->