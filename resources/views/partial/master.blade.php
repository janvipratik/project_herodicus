<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <style>
        .required {
            color: red;
        }
    </style>
    <!-- Meta Data -->

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>

        {{ isset($site_title) ? $site_title . ' | ' . GetSetting('site-title') : config('app.name', 'Herodicus') }}

    </title>

    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('backend/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('backend/js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('backend/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('backend/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('backend/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('backend/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('backend/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/jsvectormap/css/jsvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/quill/quill.snow.css') }}">

    <!-- datatablecss-->
    <link rel="stylesheet" href="{{ asset('datatable/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/css/responsive/bootstrap.min.csss') }}">
    
</head>

<body>
    @include('partial.header')
    @include('partial.left_sidebar')
    <div class="main-content app-content">

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('partial.footer')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function triggerSweetAlert(message, type) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: type,
                type: type,
                title: message,
                showConfirmButton: false,
                timer: 1500,

            })
        }
    </script>


    <script src="{{ asset('backend/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('backend/js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('backend/js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('backend/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>



    <!-- JSVector Maps JS -->
    <script src="{{ asset('backend/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('backend/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ asset('backend/libs/chart.js/chart.min.js') }}"></script>

    <!-- CRM-Dashboard -->
    <script src="{{ asset('backend/js/quill-editor.js') }}"></script>
    <script src="{{ asset('backend/libs/quill/quill.min.js') }}"></script>


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('backend/js/custom-switcher.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <!--datatable js-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="{{ asset('datatable/js/buttons/html5.min.js') }}"></script>
    <script src="{{ asset('datatable/js/buttons/print.min.js') }}"></script>
    <script src="{{ asset('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('datatable/js/datatables.js') }}"></script>
    <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('datatable/js/custom.js') }}"></script>


    @yield('js')
</body>

</html>
