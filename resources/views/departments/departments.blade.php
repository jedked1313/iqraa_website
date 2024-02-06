<!DOCTYPE html>
<html lang="ar" dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>{{ __('departments.page-title') }}</title>
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

    <!-- Start Header -->
    <div dir="ltr" class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">{{ __('departments.departments') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">{{ __('departments.home') }}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="/departments">{{ __('departments.departments') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Program Data Start -->
    <div class="container-xxl pt-1">
        <div class="container">
            <div class="text-center wow fadeInUp mb-3" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('departments.departments') }}</h6>
            </div>
            <div class="row mb-3 justify-content-center">
                <button id="p-1" class="program-buttons col-3 btn btn-outline-primary m-1 active" type="button">{{ __('departments.board') }}</button>
                <button id="p-2" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.dean') }}</button>
                <button id="p-3" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.vice') }}</button>
                <button id="p-4" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.scientific-affairs') }}</button>
                <button id="p-5" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.humen') }}</button>
                <button id="p-6" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.registraion') }}</button>
                <button id="p-7" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.students-affairs') }}</button>
                <button id="p-8" class="program-buttons col-3 btn btn-outline-primary m-1" type="button">{{ __('departments.financial-manegemant') }}</button>
            </div>
            <div class="testimonial-text bg-light text-center p-4">
                <p id="p-1" class="fs-4 lh-lg program-p">{!! __('departments.board-p') !!}</p>
                <p id="p-2" class="fs-4 lh-lg program-p d-none">{!! __('departments.dean-p') !!}</p>
                <p id="p-3" class="fs-4 lh-lg program-p d-none">{!! __('departments.vice-p') !!}</p>
                <p id="p-4" class="fs-4 lh-lg program-p d-none">{!! __('departments.scientific-affairs-p') !!}</p>
                <p id="p-5" class="fs-4 lh-lg program-p d-none">{!! __('departments.humen-p') !!}</p>
                <p id="p-6" class="fs-4 lh-lg program-p d-none">{!! __('departments.registraion-p') !!}</p>
                <p id="p-7" class="fs-4 lh-lg program-p d-none">{!! __('departments.students-affairs-p') !!}</p>
                <p id="p-8" class="fs-4 lh-lg program-p d-none">{!! __('departments.financial-manegemant-p') !!}</p>
            </div>
        </div>
    </div>
    <!-- Program Data Start -->

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