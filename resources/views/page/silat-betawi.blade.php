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
               </div><!--/#carousel-example-generic-->
           </div><!--/#carousel-container-->




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
           <div class="row">
               <div class="col-md-3 col-sm-4">
                   <div class="sidebar portfolio-sidebar">
                       <div class="sidebar-item categories">
                           <h3>Serambi Betawi</h3>
                           <ul class="nav navbar-stacked">
                               <li><a href="#">Sejarah Silat Betawi<span class="pull-right">(1)</span></a></li>
                               <li class="active"><a href="#">Metode Silat Untuk Kesehatan<span class="pull-right">(8)</span></a></li>
                               <li><a href="#">Terapi Tenaga Dalam<span class="pull-right">(4)</span></a></li>
                               <li><a href="#">Macan Betawi<span class="pull-right">(9)</span></a></li>

                           </ul>
                       </div>
                       <div class="sidebar-item  recent">
                           <h3>Event Workshop/Seminar</h3>
                           <div class="media">
                               <div class="pull-left">
                                   <a href="#"><img src="images/portfolio/b2.jpg" alt=""></a>
                               </div>
                               <div class="media-body">
                                   <h4><a href="#">Workshop beladiri sebanitenabang dalam tarung bebas</a></h4>
                                   <p>posted on  07 Mei 2017</p>
                               </div>
                           </div>
                           <div class="media">
                               <div class="pull-left">
                                   <a href="#"><img src="images/portfolio/b4.jpg" alt=""></a>
                               </div>
                               <div class="media-body">
                                   <h4><a href="#">Seminar "beladiri dalam kesehatan" bersama iko uwais</a></h4>
                                   <p>posted on  10 Mei 2017</p>
                               </div>
                           </div>
                           <div class="media">
                               <div class="pull-left">
                                   <a href="#"><img src="images/portfolio/b1.jpg" alt=""></a>
                               </div>
                               <div class="media-body">
                                   <h4><a href="#">Seminar "Pukulan Tanpa Bayangan" bersama Fauzie JTS</a></h4>
                                   <p>posted on  07 March 2014</p>
                               </div>
                           </div>
                       </div>
                       <div class="sidebar-item popular">
                           <h3>silat partner</h3>
                           <ul class="gallery">
                               <li><a href="#"><img src="images/portfolio/a1.jpg" alt=""></a></li>
                               <li><a href="#"><img src="images/portfolio/a2.jpg" alt=""></a></li>
                               <li><a href="#"><img src="images/portfolio/a3.jpg" alt=""></a></li>
                               <li><a href="#"><img src="images/portfolio/a4.jpg" alt=""></a></li>
                               <li><a href="#"><img src="images/portfolio/a5.jpg" alt=""></a></li>
                               <li><a href="#"><img src="images/portfolio/a6.jpg" alt=""></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-md-9 col-sm-8">

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
                                         <li><a href="{{ route('page.silat-betawi.show', $post->id) }}"><i class="fa fa-link"></i></a></li>
                                         <li><a href="{{ $post->image }}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="portfolio-info ">
                                 <h2> {{$post->title}}</h2>
                             </div>
                         </div>

                     </div>
                     @endforeach
                 </div>

               </div>


                       <div class="portfolio-pagination">
                           <ul class="pagination">
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
                           </ul>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </section>
   <!--/#projects-->
@endsection
