<div dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}" class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container p-5">
        <div class="row g-5">
            <div class="col-md-4 col-sm-6">
                <h4 class="text-white mb-3">{{ __('footer.links') }}</h4>
                <a class="btn btn-link" href="/"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('navbar.main-page') }}</a>
                <a class="btn btn-link" href="/programs"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('index.programs') }}</a>
                <a class="btn btn-link" href="/news"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('navbar.news') }}</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4 class="text-white mb-3">{{ __('footer.informations') }}</h4>
                <a class="btn btn-link" href="/about"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('navbar.about-collage') }}</a>
                <a class="btn btn-link" href="/contact"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('footer.contact-us') }}</a>
                <a class="btn btn-link" href="/instructors"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('navbar.instructors') }}</a>
                <a class="btn btn-link" href="/departments"><i class="fa {{ Config::get('app.locale') == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }} text-primary mx-2"></i>{{ __('navbar.departments') }}</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4 class="text-white mb-3">{{ __('footer.contect-info') }}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt mx-2"></i>{{ __('footer.location') }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt mx-2"></i>+2499</p>
                <p class="mb-2"><i class="fa fa-envelope mx-2"></i><a href="mailto:info@Iqraa.edu.sd">info@Iqraa.edu.sd</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100063661849673"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center {{ Config::get('app.locale') == 'ar' ? 'text-md-end' : 'text-md-start' }} mb-3 mb-md-0">
                    &copy; {{ __('footer.rights') }}
                </div>
                <div class="col-md-6 text-center {{ Config::get('app.locale') == 'ar' ? 'text-md-start' : 'text-md-end' }}">
                    <div class="footer-menu">
                        <a href="/">{{ __('navbar.main-page') }}</a>
                        <a href="/contact">{{ __('footer.contact-us') }}</a>
                        <a href="{{ route('locale','en') }}" class="{{ Config::get('app.locale') == 'en' ? 'd-none' : '' }}">English</a>
                        <a href="{{ route('locale','ar') }}" class="{{ Config::get('app.locale') == 'ar' ? 'd-none' : '' }}">العربية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>