@extends('layouts.plane')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

@section('body')
<nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" style="margin-left:50px; margin-top:8px">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    <h4 style="color:white">VLAVAC ADMINISTRATOR V1.0</h4>
  </div>
  <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>

        </li>
          <li>
              <a style="color:white" href={{url('/about')}}>Log Out</a>
          </li>
      </ul>
  </div>
</nav>
    <div style="margin-top:50px" id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin
                    </a>
                </li>
                <li >
                    <a href="{{url('/admcategory')}}" >Category</a>
                </li>
                <li>
                    <a href="{{url('/admproduct')}}" >Product</a>
                </li>
                <li>
                  <a href="{{url('/admprofile')}}" >Profile</a>
                </li>
                <li>
                    <a href="{{url('/admlanding')}}" >Landing</a>
                </li>
                <li>
                    <a href="{{url('/admarticle')}}" >Artikel (SOON)</a>
                </li>
                <li>
                    <a href="{{url('/admdocumentation')}}" >Documentation</a>
                </li>
                <li>
                    <a href="{{url('/admcontact')}}" >Contact Programmer</a>
                </li>
            </ul>
        </div>

  			 <div class="row" >
                  <div class="col-lg-12" style="margin-left:50px;margin-right:10px">
                      <h1 class="page-header">@yield('page_heading')</h1>
                  </div>

            </div>
  			<div class="row" style="margin-left:50px;margin-right:10px">
  				@yield('section')

        </div>


    </div>
@endsection

</body>

</html>
