@extends('page.layouts.master')
@section('content')
  <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">{{ $seminar->title }}</h1>
                            <p>{{ $seminar->speaker }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href=""><img src="" class="img-responsive" alt=""></a>
                                    
                                </div>
                                <div class="post-content overflow">
                                    
                                    <p> {!! $seminar->content !!}
                                    <br>

                                      <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
            <img src="/images/log.png" class align="center" class="img-responsive" alt=""> </div>
                                    
                                    </p>
                                    
                                  
                                        <br>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            

                                    
                                        </ul>
                                    </div>
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">


                                        <div class="row">

                                        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://silatkreatif.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
                                            <div class="col-sm-2">
                                                <img src="{{ asset('images/blogdetails/1.png')}}" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>Silatkreatif.com</h3>
                                                <p>Sebuah website yang akan mengenalkan kebudayaan silat betawi yang masih bertahan hingga saat ini dalam perkembanganya.</p>
                                                <span>Website:<a href="www.google.com"> www.silatkreatif.com</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@endsection
