<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>410 Choshtepa, Tashkent, Uzbekitan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>{{ __('messages.date') }}</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+998 71 287 68 73</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="https://www.facebook.com/SinoProfessionalMedical/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href="https://www.instagram.com/sinoprofmed/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <div class="dropdown">
                    </div>

                    <!-- Til tanlash qo‘shildi -->
                    <div class="ms-3">
                        <a href="{{ route('lang.switch', 'en') }}">🇬🇧 English</a> |
                        <a href="{{ route('lang.switch', 'ru') }}">🇷🇺 Русский</a> |
                        <a href="{{ route('lang.switch', 'uz') }}">🇺🇿 O‘zbek</a>
                    </div>
                </div>
            </div>

        </div>
    </div>