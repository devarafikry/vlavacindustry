<html lang="en">

<head>
    <style>
    .stylish-input-group .input-group-addon{
        background: white !important;
    }
    .stylish-input-group .form-control{
    	border-right:0;
    	box-shadow:0 0 0;
    	border-color:#ccc;
    }
    .stylish-input-group button{
        border:0;
        background:transparent;
    }
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 200px;
        display: inline-block;
        margin-right: 25px;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/full-slider.css') }}
    <!-- Custom CSS -->
    <!-- <link href="css/full-slider.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--  -->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top"  role="navigation"      >
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" " href={{url("/")}}>   <img src={{asset('storage/vlogo.png')}} alt='error'> </a>
            </div>
        <div class="col-sm-7 col-sm-offset-1" style="margin-top:6px">
           <div id="imaginary_container">
               <div class="input-group stylish-input-group">
                   <input type="text" class="form-control"  placeholder="Search" >
                   <span class="input-group-addon">
                       <button type="submit">
                           <span class="glyphicon glyphicon-search"></span>
                       </button>
                   </span>
               </div>
           </div>
       </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>

                  </li>
                    <li>
                        <a href="#">What We Do</a>
                    </li>
                    <li>
                        <a href="#">Activity</a>
                    </li>
                    <li>
                        <a href={{url('/about')}}>About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <div class="container navbar-inverse" style="width:100%;" >

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
    <div class="col-md-8"><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav center">
            <li>
                <a href={{url('/roomlist/new')}}>New</a>
            </li>
            <li>
                <a href={{url('/roomlist/bestseller')}}>Bestseller</a>
            </li>
            <li>
                <a href={{url('/roomlist/livingroom')}}>Living Room</a>
            </li>
            <li>
                <a href={{url('/roomlist/bedroom')}}>Bed Room</a>
            </li>
            <li>
                <a href={{url('/roomlist/diningroom')}}>Dining Room</a>
            </li>
            <li>
                <a href={{url('/roomlist/businessspace')}}>Business Space</a>
            </li>
            <li>
                <a href={{url('/roomlist/kitchen')}}>Kitchen</a>
            </li>
            <li>
                <a href="#">Interior Design</a>
            </li>
            <li>
                <a href="#">Construction</a>
            </li>
        </ul>
        <div class="pull-right" style="margin-top:10px">
          <a href="#aut">
         <img src={{asset('storage/cart.png')}} width="30px" alt='error'></a>
       </div>
    </div></div>
  </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <!-- @yield('content') -->
