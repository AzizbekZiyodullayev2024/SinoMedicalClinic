<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>410 Choshtepa, Tashkent, Uzbekitan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Dushanba - Shanba : 08.00 - 22:00</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+998 71 287 68 73</small>
                </div>

                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    <div class="dropdown">
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        🌍 {{ __('Language') }} <!-- Tilni o'zgartirish uchun "language" so'zi -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() === 'uz' ? 'active' : '' }}" href="{{ route('changeLang', ['locale' => 'uz']) }}">
                                🇺🇿 O‘zbek
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() === 'ru' ? 'active' : '' }}" href="{{ route('changeLang', ['locale' => 'ru']) }}">
                                🇷🇺 Russian
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}" href="{{ route('changeLang', ['locale' => 'en']) }}">
                                🇬🇧 English
                            </a>
                    </li>
                </ul>
</div>


            </div>
        </div>
    </div>