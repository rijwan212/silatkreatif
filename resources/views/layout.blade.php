<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>silatkreatif</title>
    <link href="{{asset('multicolor/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('multicolor/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('multicolor/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('multicolor/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('multicolor/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('multicolor/css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('multicolor/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('multicolor/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('multicolor/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('multicolor/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('multicolor/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="{{asset('multicolor/images/log.png')}}" alt="log"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Beranda</a></li>
                        <li class="{{ Request::is('/silat-betawi') ? "active" : "" }}"><a href="/silat-betawi"> Silat Betawi </i></a>
                        <li class="{{ Request::is('/seminar') ? "active" : "" }}"><a href="/seminar"> Seminar </i></a>
                        <li class="{{ Request::is('/workshop') ? "active" : "" }}"><a href="/workshop"> Workshop </i></a>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Galeri<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="/galeri/foto">Dokumentasi Foto</a></li>
                                <li><a href="/galeri/video">Video</a></li>

                            </ul>
                        </li>
                        <li class="{{ Request::is('/daftar-silat') ? "active" : "" }}"><a href="/daftar-silat">daftar</a></li>
                        {{-- <li><a href="unjuk">Unjuk Kebolehan</a></li> --}}
                        {{-- @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif --}}
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->





    <div class="container">

       @yield("container")

    </div>






     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{asset('multicolor/images/home/under.png')}}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{asset('multicolor/images/home/poto.png')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Musuh jangan dicari, ketemu jangan lari. kalopun ketemu, adepin apapun yang terjadi</blockquote>
                                <h3><a href="#">- Khong Sabeni Tenabang</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{asset('multicolor/images/home/pto.png')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Tangan terampil maen pukul, bukun untuk memukul melainkan untuk merangkul sesama manusia.</blockquote>
                                <h3><a href="">- Bang Fauzi Tenabang </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                        </address>

                        <h2>Alamat Kantor</h2>
                        <address>
                        Jl. Menteng Atas Barat<br>
                        Kel. Menteng atas <br>
                        Kec. Setiabudi <br>
                        Jakarta Selatan <br>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Info lebih lanjut</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; MS Designer 2017. All Rights Reserved | Penelitian Ilmiah.</p>
                        <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Rijwan Muhammad</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="{{asset('multicolor/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('multicolor/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('multicolor/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('multicolor/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('multicolor/js/main.js')}}"></script>
</body>
</html>
