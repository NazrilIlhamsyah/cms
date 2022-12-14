<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Digma</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href={{ asset("assets/frontend/img/favicon.icon") }} rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href={{ asset("assets/frontend/lib/animate/animate.min.css") }} rel="stylesheet">
        <link href={{ asset("assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css") }} rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href={{ asset("assets/frontend/css/bootstrap.min.css") }} rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href={{ asset("assets/frontend/css/style.css") }} rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">        
    </head>

    <body>
       
      
            <!-- Spinner End -->
    
    
        {{-- NAVBAR --}}
        @include('layouts.partials.member.navbar')
        {{-- END NAVBAR --}}

        {{-- CONTENT --}}
        @yield('content')
        {{-- END CONTENT --}}

        {{-- FOOTER --}}
        @include('layouts.partials.member.footer')
        {{-- END FOOTER --}}
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src={{ asset("assets/frontend/lib/wow/wow.min.js") }}></script>
        <script src={{ asset("assets/frontend/lib/easing/easing.min.js") }}></script>
        <script src={{ asset("assets/frontend/lib/waypoints/waypoints.min.js") }}></script>
        <script src={{ asset("assets/frontend/lib/owlcarousel/owl.carousel.min.js") }}></script>

        <!-- Template Javascript -->
        <script src={{ asset("assets/frontend/js/main.js") }}></script>

         {{-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
    </body>

</html>