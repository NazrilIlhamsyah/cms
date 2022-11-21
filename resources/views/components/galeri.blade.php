@php
    use App\Models\Tb_kategori_galeri;
    $kategoriGaleri = Tb_kategori_galeri::all();
@endphp
<div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Galeri</p>
            </header>
        <div class="row g-4">
            <div class="card-body">
            @foreach ($kategoriGaleri as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="{{ $item->cover() }}" alt=""></a>
                            
                        </div>
                        <div class="p-4 pb-0">
                            <h3 class="post-title">{{ $item->nama }}</h3>
                            <a href="galeri/{{ $item->slug }}"
                                class="d-block h5 mb-2 fs-6 readmore stretched-link mt-auto"><span>Lihat</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
</div>

{{-- <div>
    <div class="container py-5 mb-5">
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Galeri</p>
                </header>
                <div class="row">
                    @foreach ($kategoriGaleri as $item)
                        <div class="col-lg-4">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ $item->cover() }}" class="img-fluid" alt="">
                                </div>
                                <h3 class="post-title">{{ $item->nama }}</h3>
                                <a href="galeri/{{ $item->slug }}"
                                    class="readmore stretched-link mt-auto"><span>Lihat</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div> --}}
