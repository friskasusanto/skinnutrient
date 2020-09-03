<!DOCTYPE html>
<html lang="en">

@include('backend.layout.html')

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    @include('backend.layout.header')

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        @include('backend.layout.sidebar')

        @include('backend.layout.rightSidebar')
        
        <div class="page-body">

            @yield('content')

        </div>

        @include('backend.layout.footer')
        
    </div>

</div>

@include('backend.layout.script')
@yield('script')

</body>
</html>
