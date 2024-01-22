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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div dir="rtl" class="col-sm-10 col-lg-8">
                                <h5 class="text-primary mb-3 animated slideInDown">{{ __('index.collage-name') }}</h5>
                                <h1 class="display-3 text-white animated slideInDown">مكتبة كلية إقرأ</h1>
                                <p class="fs-5 text-white mb-4 pb-2">مكتبة علمية تشتمل على آلاف الكتب والبحوث العلمية و المراجع الطبية والعامة والمقررات العربية و الانجليزية, و يوجد بها بيئة مريحه جدا للدراسه و تخدم جميع التخصصات التي تُدرسها الكلية</p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('index.read-more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div dir="rtl" class="col-sm-10 col-lg-8">
                                <h5 class="text-primary mb-3 animated slideInDown">{{ __('index.collage-name') }}</h5>
                                <h1 class="display-3 text-white animated slideInDown">مستشفى أسنان كلية إقرأ</h1>
                                <p class="fs-5 text-white mb-4 pb-2">تتكون مستشفى أسنان كلية إقرأ من مجموعة  من عيادات الاسنان ويبلغ عددها 30 وحده بالإضافة الى غرفة عمليات كبيرة و غرفة اخرى صغيره و معامل التركيبات المتحركة و التركيبات الثابته و معمل عام للفحوصات و قسم للأشعة. </p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('index.read-more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h2 class="mb-4">{{ __('index.welcome') }}</h2>
                    <p class="mb-4">{{ __('index.about-collage-paragraph') }}</p>
                    <h5 class="pb-3">{{ __('index.why-iqraa') }}</h5>
                    <div class="row gy-2 gx-4 mb-4 {{ Config::get('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.why-1') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.why-2') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.why-3') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.why-4') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.why-5') }}</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/about">{{ __('index.read-more') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('index.collage-news') }}</h6>
                <h2 class="mb-5">{{ __('index.latest-event') }}</h2>
            </div>
            <div class="row g-3 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                <div class="card mx-2 wow fadeInUp p-0">
                    <img src="img/team-3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('index.event-title') }}</h5>
                        <p class="card-text">{{ __('index.event-details') }}</p>
                        <a href="#" class="btn btn-primary">{{ __('index.read-more') }}</a>
                    </div>
                </div>
                <div class="card mx-2 wow fadeInUp p-0">
                    <img src="img/team-3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('index.event-title') }}</h5>
                        <p class="card-text">{{ __('index.event-details') }}</p>
                        <a href="#" class="btn btn-primary">{{ __('index.read-more') }}</a>
                    </div>
                </div>
                <div class="card mx-2 wow fadeInUp p-0">
                    <img src="img/team-3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('index.event-title') }}</h5>
                        <p class="card-text">{{ __('index.event-details') }}</p>
                        <a href="#" class="btn btn-primary">{{ __('index.read-more') }}</a>
                    </div>
                </div>
                <div class="card mx-2 wow fadeInUp p-0">
                    <img src="img/team-3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('index.event-title') }}</h5>
                        <p class="card-text">{{ __('index.event-details') }}</p>
                        <a href="#" class="btn btn-primary">{{ __('index.read-more') }}</a>
                    </div>
                </div>
            </div>
            <a href="/news" class="btn btn-primary w-25 animated slideInLeft m-auto mt-4">{{ __('index.all-news') }}</a>
        </div>
    </div>
    <!-- Team End -->

    <!-- status Start -->
    <div class="container-xxl py-5">
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
                    <h5 class="mb-0">عائدة محمود</h5>
                    <p>برنامج طب الأسنان</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">كلية إقرأ جعلتني امر بالكثير من التجارب الحياتية و العملية والتي كونت شخصيتي</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-2.jpg">
                    <h5 class="mb-0">أدنا عمر</h5>
                    <p>برنامج طب الاسنان</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">انا سعيدة جدا بدخولي الى كلية إقرا, يوجد بها بيئة دراسية جيدة</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-3.jpg">
                    <h5 class="mb-0">معاذ احمد عبيد</h5>
                    <p>برنامج التمريض</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">كلية جميلة جدا تحتوي علي العديد من الانشطة </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-4.jpg">
                    <h5 class="mb-0">ميعاد اباذر</h5>
                    <p>برنامج الصيدلة</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">وجودي في كلية إقرا اتاح لي اكتشاف العديد من المهارات و الأنشطة</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="testimonial-img border rounded-circle p-2 mx-auto mb-3" src="img/student-5.jpg">
                    <h5 class="mb-0">فاطمة محمد</h5>
                    <p>برنامج المختبرات</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">الكلية لديها مميزات عن باقي الكليات يوجد فيها حرم الكلية كبير ومكان  أستراحة  الطلاب تحت الاشجار يعطي طاقة  ايجابية  وكل سمستر في زمنه المحدد</p>
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