@include('parts/links/header_link')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        @include('parts/dash/spinner')


        @include('parts/dash/sidebar')

        <div class="content">

            @include('parts/dash/navbar')


            @yield('main_content')


            @include('parts/dash/footer')
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</body>
@include('parts/links/footer_link')