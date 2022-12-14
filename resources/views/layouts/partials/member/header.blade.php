  @php
      use App\Models\Tb_setting;
      use App\Models\Tb_menu;
      use App\Models\Tb_submenu;
      $setting = Tb_setting::find(1);
      $menu = Tb_menu::orderBy('urutan', 'asc')->get();
  @endphp
   <div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
            <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="assets/frontend/img/carousel-1.jpg" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="assets/frontend/img/carousel-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- ======= Header ======= -->
  {{-- <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="/" class="logo d-flex align-items-center">
              {{-- <img src="assets/img/logo.png" alt=""> --}}
              {{-- <span>{{ $setting->judul }}</span>
          </a>

          <nav id="navbar" class="navbar">
              <ul>
                  @foreach ($menu as $item)
                      @if ($item->id_konten === 0)
                          <li class="dropdown"><a href="#"><span>{{ $item->nama }}</span> <i
                                      class="bi bi-chevron-down"></i></a>
                              <ul>
                                  <li>
                                      @php
                                          $submenu = Tb_submenu::orderBy('urutan', 'asc')
                                              ->where('id_menu', $item->id)
                                              ->get();
                                      @endphp
                                      @foreach ($submenu as $data)
                                          <a href="/s=>{{ $data->slug }}">{{ $data->nama }}</a>
                                      @endforeach
                                  </li>
                              </ul>
                          </li>
                      @else
                          <li><a class="nav-link scrollto" href="/m=>{{ $item->slug }} ">{{ $item->nama }}</a></li>
                      @endif
                  @endforeach
                  <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header --> --}}