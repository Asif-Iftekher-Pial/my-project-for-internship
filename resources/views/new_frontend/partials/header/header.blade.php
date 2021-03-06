<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Construsction online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
 <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
 <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
 <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
 -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
 <script src="themes/js/less.js" type="text/javascript"></script> -->

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="/fronendCSS_JS_files/themes/bootshop/bootstrap.min.css" media="screen" />
    <link href="/fronendCSS_JS_files/themes/css/base.css" rel="stylesheet" media="screen" />
    <!-- Bootstrap style responsive -->
    <link href="/fronendCSS_JS_files/themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="/fronendCSS_JS_files/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="/fronendCSS_JS_files/themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="/fronendCSS_JS_files/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="/fronendCSS_JS_files/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="/fronendCSS_JS_files/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="/fronendCSS_JS_files/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
        href="/fronendCSS_JS_files/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
</head>

<body>
    <div id="header">
        <div class="container">
            <div id="welcomeLine" class="row">
                @auth
                    <div class="span6" style="background-color: rgb(39, 170, 71)"><strong style="color: white"> Welcome
                            {{ auth()->user()->name }}</strong></div>
                @else
                    <div class="span6" style="background-color: rgb(59, 49, 207)"><strong style="color: white"> </strong>
                    </div>
                @endauth
                <div class="span6">
                    <div class="pull-right">

                        <a href={{ route('viewCart') }}><span class="btn btn-mini btn-primary"><i
                                    class="icon-shopping-cart icon-white"></i> [ {{ count(Cart::content()) }} ] Itemes
                                in your cart </span> </a>
                    </div>
                </div>
            </div>
            <!-- Navbar ================================================== -->
            <div id="logoArea" class="navbar">
                <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-inner">
                    <a class="brand" href="{{ route('homepage') }}"><img src="/fronendCSS_JS_files/themes/images/homeicon.jpg"
                            alt="Bootsshop" /></a>
                    <form class="form-inline navbar-search" method="post" action="products.html">
                        <input id="srchFld" class="srchTxt" type="text" />
                        
                        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                    </form>
                    <ul id="topMenu" class="nav pull-right">
                        @auth
                        <li class=""><a href="{{ route('myorders') }}"> My Orders</a></li>
                        @endauth
                        
                        <li class=""><a href="normal.html">Delivery</a></li>
                        <li class=""><a href="contact.html">Contact</a></li>
                        <li class="">


                            @auth
                                <a href="{{ route('logout') }}" role="button" style="padding-right:0"><span
                                        class="btn btn-large btn-success">Logout</span></a>


                                {{-- <span style="color: white">{{ auth()->user()->name}}</span><a href="{{ route('logout') }}">LogOut </a> --}}

                            @else
                                <a href="{{ route('user_Login') }}" role="button" style="padding-right:0"><span
                                        class="btn btn-large btn-success">Login</span></a>

                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End====================================================================== -->
