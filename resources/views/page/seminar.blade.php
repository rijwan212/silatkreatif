@extends('page.layouts.master')
@section('content')

  <section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Event silatkreatif.com</h1>
                        <p>Seminar dan Workshop beladiri silat betawi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="blog" class="padding-top">
    <div class="container">

        <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
            <img src="/images/log.png" class align="center"="img-responsive" alt="">



        </div>

        <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Event Seni Beladiri</h1>
        <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Berikut ini adalah informasi tentang event beladiri silat yang diselenggarakan atas kerjasama silatkreatif bersama panitia penyelenggara.
            <br> Kalian dari kalangan pesilat,atlet silat,pelajar, dan dari manapun bisa gabung dalam mengikuti acara-acara yang diselenggarakan </p>
        <div class="row">

            <div class="row">
                <div class="col-md-12 col-sm12">
                    <div class="row">
                        @foreach($seminar as $seminar2)
                        <div class="col-md-6 col-2sm-12 blog-padding-right">
                            <div class="single-blog two-column">

                                <div class="post-thumb">
                                    <a href=""><img src="/{{ $seminar2->image }}" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="{{ route('page.seminar.show2', $seminar2->id) }}"> {{$seminar2->title}} </a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p> {{str_limit(strip_tags($seminar2->content),120) }} </p>
                                    <a href="{{ route('page.seminar.show2', $seminar->id) }}" class="read-more">View More</a>

                                </div>
                            </div>

                        </div>
                        @endforeach


                    </div>

                    <div class="col-md-6">
                        {{ $seminar->links() }}
                    </div>


                </div>


            </div>


        </div>




    </div>



</section>                

    <!--/#blog-->

   @endsection
