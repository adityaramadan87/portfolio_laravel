<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('app-assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('app-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('app-assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('app-assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('app-assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('app-assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/style.css')}}">
</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="{{url('')}}"><span class="img" style="background-image: url({{asset('app-assets/images/profil.jpg')}});"></span>Rizky Adytia Ramadan</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li><a href="{{url('')}}">Home</a></li>
                <li class="colorlib-active"><a href="{{url('project')}}">Project</a></li>
                <li><a href="{{url('skills')}}">Skills</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </aside>
</div>
</aside> <!-- END COLORLIB-ASIDE -->
<div id="colorlib-main">
    <section class="ftco-section ftco-bread">
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-md-8 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{url('')}}">Home</a></span> <span>Project</span></p>
                    <h1 class="bread">Project</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-3">
        <div class="photograhy">

            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-4 ftco-animate">
                    <a href="http://192.168.137.1:8000/public/image/{{$project->image_project}}" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(http://192.168.137.1:8000/public/image/{{$project->image_project}});">
                        <div class="overlay"></div>
                        <div class="text ml-4 mb-4">
                            <h3>{{$project->title_project}}</h3>
                            <span class="tag">{{$project->category_project}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">JL. Margonda Raya, KP. Gedong Rt 03/19 Kelurahan Kemiri Muka Kecamatan Beji Kota Depok, Indonesia</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 819-3153-1096</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">rizkyadytia87@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p></p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('app-assets/js/jquery.min.js')}}"></script>
<script src="{{asset('app-assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('app-assets/js/popper.min.js')}}"></script>
<script src="{{asset('app-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('app-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('app-assets/js/aos.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('app-assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('app-assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('app-assets/js/scrollax.min.js')}}"></script>
<script src="{{asset('app-assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
<script src="{{asset('app-assets/js/google-map.js')}}"></script>
<script src="{{asset('app-assets/js/main.js')}}"></script>

</body>
</html>
