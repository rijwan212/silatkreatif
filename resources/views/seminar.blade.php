@extends('layout')
 @section('container')  
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Event Seminar</h1>
                            <p>Seminar beladiri silat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    
    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">

                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">Shift Seminar Januari - Maret 2017</a>
                    </div>
                     @foreach($posts as $post)
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/sm1.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">{{$post->title}} </a></h2>
                                    
                                    <p>{{str_limit(strip_tags($post->content),20) }}</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/sm2.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html#">{{$post->title}}</a></h2>
                
                                    <p>{{str_limit(strip_tags($post->content),20) }}</p>
                                    <a href="{{ url('situsseminar/'.$post->id) }}" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

   @endsection