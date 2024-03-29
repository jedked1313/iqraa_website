<!DOCTYPE html>
<html lang="ar" dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>{{ __('news.page-title') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="كلية إقرا - اخبار الكلية" name="keywords">
    <meta content="كلية إقرا - اخبار الكلية" name="description">

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

    <!-- Start Header -->
    <div dir="ltr" class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">{{ __('news.collage-news') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('news.home') }}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="/news">{{ __('news.collage-news') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- News Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('news.collage-news') }}</h6>
                <h1 class="mb-5">{{ __('news.latest-news') }}</h1>
            </div>
            @foreach ($news as $new)
            <div class="row p-0 m-0 mb-3 mx-md-5 news-item border border-primary">
                <div class="col-lg-4 col-md-12 p-0">
                    <img src="{{ URL::asset($new->image) }}" class="w-100" style="height:20rem;" alt="event">
                </div>
                <div class="col-lg-8 col-md-12 d-flex flex-wrap flex-column p-4">
                    <h5 class="card-title">{{ Config::get('app.locale') == 'ar' ? $new->title_ar : $new->title_en }}</h5>
                    <p class="card-text fs-6 m-0 w-100 flex-grow-1">{{ Config::get('app.locale') == 'ar' ? $new->description_ar : $new->description_en }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ __('index.date') }}{{ $new->created_at }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Contact End -->

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>