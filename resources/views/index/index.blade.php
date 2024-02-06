<!DOCTYPE html>
<html lang="ar" dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    
    <title>{{ __('index.collage-name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner loading -->
    @include('components.spinner')
    
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Carousel Start -->
    <div dir="ltr" class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach($sliders as $slide)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ URL::asset($slide->image) }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-end">
                            <div dir="rtl">
                                <h5 class="text-primary mb-3 animated slideInDown">{{ __('index.collage-name') }}</h5>
                                <h1 class="display-3 text-white animated slideInDown">{{ Config::get('app.locale') == 'ar' ? $slide->title_ar : $slide->title_en }}</h1>
                                <p class="fs-5 text-white mb-4 pb-2">{{ Config::get('app.locale') == 'ar' ? $slide->description_ar : $slide->description_en }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/main.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('index.read-about-us') }}</h6>
                    <h3 class="my-2">{{ __('index.welcome') }}</h3>
                    <p class="mb-4">{{ __('index.about-collage-paragraph') }}</p>
                    <h5 class="pb-3">{{ __('index.why-iqraa') }}</h5>
                    <div class="row gy-2 gx-4 mb-4 {{ Config::get('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="far fa-check-square text-primary mx-2"></i>{{ __('index.why-1') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="far fa-check-square text-primary mx-2"></i>{{ __('index.why-2') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="far fa-check-square text-primary mx-2"></i>{{ __('index.why-3') }}</p>
                        </div>
                        <div class="{{ Config::get('app.locale') == 'ar' ? 'col-sm-6' : 'col-sm-12' }}">
                            <p class="mb-0"><i class="far fa-check-square text-primary mx-2"></i>{{ __('index.why-4') }}</p>
                        </div>
                        <div class="{{ Config::get('app.locale') == 'ar' ? 'col-sm-6' : 'col-sm-12' }}">
                            <p class="mb-0"><i class="far fa-check-square text-primary mx-2"></i>{{ __('index.why-5') }}</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/about">{{ __('index.read-more') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- News Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('index.collage-news') }}</h6>
                <h2 class="mb-5">{{ __('index.latest-event') }}</h2>
            </div>
            <div class="row gy-5 justify-content-evenly">
                @foreach ($news as $new)
                <div class="col-md-5 col-sm-11 card news-item p-0" >
                    <img class="card-img-top h-50" src="{{ URL::asset($new->image) }}" alt="" />
                    <div class="card-body d-flex flex-column align-items-center">
                        <h4 class="card-title">{{ Config::get('app.locale') == 'ar' ? $new->title_ar : $new->title_en }}</h4>
                        <p class="card-text flex-grow-1">{{ Config::get('app.locale') == 'ar' ? $new->description_ar : $new->description_en }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">{{ __('index.date') }}{{ substr($new->created_at,0,-9) }}</h6>
                        <a href="#" class="card-link btn btn-primary w-50">{{ __('index.read-more') }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="/news" class="btn btn-primary animated slideInLeft px-5 mt-4">{{ __('index.all-news') }}</a>
        </div>
    </div>
    <!-- News End -->

    <!-- Banner Start -->
    <div class="banner text-center" id="status">
        <h1 class="text-white">{{ __('index.banner-h') }}</h1>
        <a href="/programs" class="btn btn-primary mt-3">{{ __('index.programs') }}</a>
    </div>
    <!-- Banner End -->

    <!-- status Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row text-center">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('index.info') }}</h6>
                    <h2 class="mb-5">{{ __('index.status') }}</h2>
                </div>
                <div class="status col-lg-3 col-md-6 border-end border-start">
                    <span class="fa fa-users fa-5x text-primary p-3"></span>
                    <h1 class="Count" data=2856>0</h1>
                    <h5>{{ __('index.students') }}</h5>
                </div>
                <div class="status col-lg-3 col-md-6 border-end border-start">
                    <span class="fa fa-university fa-5x text-primary p-3"></span>
                    <h1 class="Count" data=15>0</h1>
                    <h5>{{ __('index.classrooms') }}</h5>
                </div>
                <div class="status col-lg-3 col-md-6 border-end border-start">
                    <span class="fa fa-graduation-cap fa-5x text-primary p-3"></span>
                    <h1 class="Count" data=856>0</h1>
                    <h5>{{ __('index.gradute-students') }}</h5>
                </div>
                <div class="status col-lg-3 col-md-6 border-end border-start">
                    <span class="fa fa-book fa-5x text-primary p-3"></span>
                    <h1 class="Count" data=7>0</h1>
                    <h5>{{ __('index.study-programs') }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- status End -->

    <!-- Testimonial Start -->
    <div dir="ltr" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('index.students-opinions') }}</h6>
                <h2 class="mb-5">{{ __('index.students-say') }}</h2>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-1.jpg">
                    <h5 class="mb-0">{{ __('index.student-name-1') }}</h5>
                    <p>{{ __('index.student-program-1') }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{ __('index.student-message-1') }}</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-2.jpg">
                    <h5 class="mb-0">{{ __('index.student-name-2') }}</h5>
                    <p>{{ __('index.student-program-2') }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{ __('index.student-message-2') }}</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-3.jpg">
                    <h5 class="mb-0">{{ __('index.student-name-3') }}</h5>
                    <p>{{ __('index.student-program-3') }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{ __('index.student-message-3') }}</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-4.jpg">
                    <h5 class="mb-0">{{ __('index.student-name-4') }}</h5>
                    <p>{{ __('index.student-program-4') }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{ __('index.student-message-4') }}</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-5.jpg">
                    <h5 class="mb-0">{{ __('index.student-name-5') }}</h5>
                    <p>{{ __('index.student-program-5') }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{ __('index.student-message-5') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
    <!-- Footer -->
    @include('layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>