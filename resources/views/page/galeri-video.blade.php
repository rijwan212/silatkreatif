@extends('page.layouts.master')
@section('content')



<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Video Galeri  </h1>
                        <p>Video Silat Budaya Betawi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->
<section id="team">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="/images/log.png" class align="center"="img-responsive" alt="">



            </div>

            <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Galeri Video silatkreatif.com</h1>
            <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Berikut beberapa video kami dalam berbagai kegiatan padepokan silat betawi yang masih berkembang hingga saat ini.
                <br> Kegiatan silatkreatif selalu meliputi kegiatan padepokan </p>

            <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#team-carousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->

                <div class="carousel-inner">
                    @foreach($videos as $videos2)
                    <div class="item active">

                        <div class="col-sm-3 col-xs-6">

                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <iframe width="280" height="295" src="{!! $videos2->url !!}" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                </div>
                                <div class="person-info">
                                    <h2>{{ $videos2->title }}</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>


                <div class align="center"="col-md-6">
                    {{ $videos->links() }}
                </div>

            </div>
        </div>
    </div>


</section>
@endsection
