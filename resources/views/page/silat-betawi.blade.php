@extends('page.layouts.master')
@section('content')


<div id="carousel-container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('images/portfolio/slider1.jpg')}}" alt="">
                <div class="carousel-caption">
                    <h3>Lebaran Betawi</h3>
                    <p>Pertemuan para jawara di car free day dari berbagai daerah jabodetabek</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/portfolio/slider2.jpg')}}" alt="">
                <div class="carousel-caption">
                    <h3>Penasehat IPSI</h3>
                    <p>DR.Eddie. M. Nalappraya ( Dewan Pembina IPSI ) </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/portfolio/slider3.jpg')}}" alt="">
                <div class="carousel-caption">
                    <h3>Palang pintu Betawi</h3>
                    <p>Pelestarian palang pintu betawi</p>
                </div>
            </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <!--/#carousel-example-generic-->
</div>
<!--/#carousel-container-->




<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">


                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">SilatKreatif</h1>
                        <p>Kreatifitas dalam seni beladiri</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


</section>
<!--/#page-breadcrumb-->

<section id="projects" class="padding-top">
    <div class="container">

        <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
            <img src="/images/log.png" class align="center" class="img-responsive" alt="">



        </div>


        <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Perguruan Pencak Silat Betawi</h1>
        <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Berikut adalah data sejarah dari berbagai perguruan silat betawi yang ada dijabodetabek dengan berbagai macam aliran
            <br> dan padepokan jawara betawi. dari sini kita akan menemukan informasi silat budaya betawi </p>
        <div class="row">

        </div>
    </div>
    <div class="col-md-12 col-sm-12">

        <div class="row">
            @foreach($posts as $post)
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="{{ $post->image }}" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="{{ route('page.silat-betawi.show', $post->id) }}"><i class="fa fa-link"></i></a>
                                </li>
                                <li><a href="{{ $post->image }}" data-lightbox="example-set"><i class="fa fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info ">
                        <h2 align="center"> {{$post->title}}</h2>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>


    <div class="portfolio-pagination">

        {{ $posts->links() }}

        <!-- <ul class="pagination">
                             <li><a href="#">left</a></li>
                             <li><a href="#">1</a></li>
                             <li><a href="#">2</a></li>
                             <li class="active"><a href="#">3</a></li>
                             <li><a href="#">4</a></li>
                             <li><a href="#">5</a></li>
                             <li><a href="#">6</a></li>
                             <li><a href="#">7</a></li>
                             <li><a href="#">8</a></li>
                             <li><a href="#">9</a></li>
                             <li><a href="#">right</a></li>
                           </ul> -->
    </div>
    </div>
    </div>

    </div>
    </div>
</section>
   <!--/#projects-->
@endsection
