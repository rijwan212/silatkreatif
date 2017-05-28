
 @extends('layout')
 @section('container')
    <div class="logo-image">                                
       <a href="satu"><img class="img-responsive" src="images/log.png" alt=""> </a> 
    </div>
     <section id="coming-soon">        
         <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">                    
                    <div class="text-center coming-content">
                        <h1>Belum Ada Pertandingan</h1>
                        <p>Mohon maaf untuk saat ini silatkreatif.com belum membuka pertandingan antar perguruan dikarnakan beberapa hal.<br /> Kami akan membuka kembali diakhir tahun 2017. Terimakasih telah berkunjung</p>                           
                        <div class="social-link">
                            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-12">
                    <div class="time-count">
                        <ul id="countdown">
                            <li class="angle-one">
                                <span class="days time-font">Silat</span>
                                <p>Betawi</p>
                            </li>
                            <li class="angle-two">
                                <span class="hours time-font">Kreatif</span>
                                <p>Pemuda</p>
                            </li>
                            <li class="angle-three">
                                <span class="minutes time-font">dot</span>
                                <p> indonesia </p>
                            </li>                            
                            <li class="angle-four">
                                <span class="seconds time-font">com</span>
                                <p>Inovatif</p>
                            </li>               
                        </ul>   
                    </div>
                </div>
            </div>
        </div>       
    </section>
    
   
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
            //Countdown js
         $("#countdown").countdown({
                date: "10 march 2015 12:00:00",
                format: "on"
            },      
            function() {
                // callback function
        });
    </script>
    
@endsection