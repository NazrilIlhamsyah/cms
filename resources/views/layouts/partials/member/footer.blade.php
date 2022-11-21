@php
use App\Models\Tb_menu;
use App\Models\Tb_submenu;
use App\Models\Tb_setting;
$setting = Tb_setting::find(1);
$menu = Tb_menu::all();
@endphp
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$setting->alamat}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$setting->call_us}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$setting->email_us}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$setting->instagram}}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <ul class="navbar-nav ms-auto">
                    @foreach ($menu as $item)
                        @if ($item->id_konten === 0)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-link text-white dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ $item->nama }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @php
                                        $submenu = Tb_submenu::where('id_menu', $item->id)->get();
                                    @endphp
                                    @foreach ($submenu as $data)
                                        <a href="/s=>{{ $data->slug }}"
                                            class="dropdown-item {{ Request::is('') ? 'active text-warning' : '' }}">{{ $data->nama }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <a href="/m=>{{ $item->slug }}"
                                class="btn btn-link text-white {{ Request::is('/m=>saha') ? 'active text-warning' : '' }}">{{ $item->nama }}</a>
                        @endif
                    @endforeach
                </ul>
                
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Photo Gallery</h5>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/frontend/img/property-6.jpg" alt="">
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
                    
                    <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
<!-- ======= Footer ======= -->
{{-- <footer id="footer" class="footer"> --}}

    {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="/" class="logo d-flex align-items-center">
                        {{-- <img src="assets/img/logo.png" alt=""> --}}
                        {{-- <span>{{ $setting->judul }}</span>
                    </a>
                    <p>{{ $setting->alamat }}</p>
                    <div class="social-links mt-3">
                        <a href="{{ $setting->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="{{ $setting->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $setting->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $setting->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        @foreach ($menu as $item)
                            @if ($item->id_konten === 0)
                                <li class="nav-item dropdown">
                                    <i class="bi bi-chevron-right"></i>
                                    <a id="navbarDropdown" class="btn btn-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre style="text-decoration: none;">
                                        {{ $item->nama }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @php
                                            $submenu = Tb_submenu::where('id_menu', $item->id)->get();
                                        @endphp
                                        @foreach ($submenu as $data)
                                            <a href="/s=>{{ $data->slug }}"
                                                class="dropdown-item {{ Request::is('') ? 'active text-warning' : '' }}">{{ $data->nama }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="/m=>{{ $item->slug }}">{{ $item->nama }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div> --}}

                {{-- <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    {{-- <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br> --}}
                    {{-- <strong>Phone:</strong> {{ $setting->call_us }}<br>
                    <strong>Email:</strong> {{ $setting->email_us }}<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ $setting->judul }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="/">Belajar Link</a>
        </div>
    </div>
</footer><!-- End Footer --> --}} 


<!-- Footer Start -->
{{-- @php
      use App\Models\Tb_menu;
      use App\Models\Tb_submenu;
      use App\Models\Tb_setting;
      $setting = Tb_setting::find(1);
      $menu = Tb_menu::all();
  @endphp
  <div class="container-fluid bg-primary text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-4 col-md-6">
                  <h5 class="text-light mb-4">Alamat:</h5>
                  <p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i>{{ $setting->alamat }}
                  </p>
                  <p class="mb-2 text-light"><i class="fa fa-phone-alt me-3"></i>{{ $setting->call_us }}</p>
                  <p class="mb-2 text-light"><i class="fa fa-envelope me-3"></i>{{ $setting->email_us }}</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h5 class="text-light mb-4">Menu</h5>
                  <ul class="navbar-nav ms-auto">
                      @foreach ($menu as $item)
                          @if ($item->id_konten === 0)
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="btn btn-link text-white dropdown-toggle" href="#"
                                      role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false" v-pre>
                                      {{ $item->nama }}
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                      @php
                                          $submenu = Tb_submenu::where('id_menu', $item->id)->get();
                                      @endphp
                                      @foreach ($submenu as $data)
                                          <a href="/s=>{{ $data->slug }}"
                                              class="dropdown-item {{ Request::is('') ? 'active text-warning' : '' }}">{{ $data->nama }}</a>
                                      @endforeach
                                  </div>
                              </li>
                          @else
                              <a href="/m=>{{ $item->slug }}"
                                  class="btn btn-link text-white {{ Request::is('/m=>saha') ? 'active text-warning' : '' }}">{{ $item->nama }}</a>
                          @endif
                      @endforeach
                  </ul>
              </div>
              <div class="col">
                  <h5 class="text-light mb-4">Social Media</h5>
                  <div class="d-flex pt-2">
                      <a class="btn btn-square btn-outline-warning rounded-circle me-1"
                          href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-square btn-outline-warning rounded-circle me-1"
                          href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-square btn-outline-warning rounded-circle me-1"
                          href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-square btn-outline-warning rounded-circle me-0"
                          href="{{ $setting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid copyright">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a href="#">Damkar JABAR</a>, All Right Reserved.
                  </div>
                  {{-- <div class="col-md-6 text-center text-md-end">
                    <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
                    Designed By <a href="https://htmlcodex.com">DAMKAR</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                        target="_blank">DAMKAR</a>
                </div>
  </div>
  </div>
  </div>
  </div> --}}
<!-- Footer End -->