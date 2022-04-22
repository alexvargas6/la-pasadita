<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>La pasadita</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="public/../node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="public/../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Añadimos el css generado con webpack-->
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="public/../node_modules/jqvmap/dist/jqvmap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- endinject -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favi/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favi/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favi/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favi/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favi/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favi/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favi/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favi/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favi/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favi/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favi/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favi/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favi/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @yield('js')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('navbar.nav')
        <!-- partial -->
        <div id="app" class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:../../partials/_sidebar.html -->

                @include('navbar.sidebar')

                <!-- partial -->
                <div class="content-wrapper">
                    <div class="row">

                        @yield('cont')

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                @include('navbar.footer')
                <!-- partial -->
            </div>
            <!-- row-offcanvas ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="public/../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="public/../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="public/../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="public/js/off-canvas.js"></script>
    <script src="public/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                nombreAlimento: "",
                precioAlimento: "",
                fotoAlimento: "",
                indice: "4"
            },
            methods: {
                add: function() {
                    this.nombreAlimento = "",
                        this.precioAlimento = "",
                        this.fotoAlimento = ""
                }
            }
        })
    </script>
    @yield('java')
</body>

</html>
