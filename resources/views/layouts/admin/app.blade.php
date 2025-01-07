<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainSpace | @yield("name")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.admin.left-sidebar')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layouts.admin.nav')

                <!-- Begin Page Content -->
                <div class="container-fluid px-2">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
</body>
</html>
