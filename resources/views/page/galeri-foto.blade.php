@extends('page.layouts.master')
@section('content')
    <section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Galeri Foto</h1>
                        <p>Foto dokumentasi silatkreatif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="company-information" class="choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="/images/home/kay.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <h2>Galeri Silat Kreatif</h2>
                <p>Kegiatan dari setiap event yang dilaksanakan atas kerjasama kami bersama
                    <br /> Komunitas pecinta silat dan forum kebudayaan betawi</p>
                <ul class="elements">
                    <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i> Dokumentasi Event Karnaval Betawi</li>
                    <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i> Dokumentasi Event Seminar Betawi</li>
                    <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><i class="fa fa-angle-right"></i> Dokumentasi Event Workshop Silat Betawi</li>
                    <li class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms"><i class="fa fa-angle-right"></i> Dokumentasi Liputan Silatkreatif</li>
                    <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i>Dokumentasi Silaturahmi Antar Perguran</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/#company-information-->

<!--/#services-->

<!--/#action-->

<section id="recent-projects" class="recent-projects">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="/images/log.png" class align="center"="img-responsive" alt="">



            </div>

            <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Galeri silatkreatif.com</h1>
            <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Berikut beberapa dokumentasi kami dalam berbagai kegiatan baik seminar,
                <br> karnaval,workshop, dan lain lain </p>
            @foreach($photos as $photo)
            <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="800ms">

                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="{{ $photo->url }}" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="{{ $photo->url }}" data-lightbox="example-set"><i class="fa fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h2>{{$photo->title}}</h2>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class align="center"="col-md-6">
            {{ $photos->links() }}
        </div>
    </div>
</section>
                

@endsection
