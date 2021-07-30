<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Floating WhatsApp end -->

    <!-- header start -->
    @include('frontend.layout.header')
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Berdasarkan Kategori</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- category 4 -->
    <div class="category-bg ratio_square">
        <div class="container-fluid p-0">
            <div class="row order-section">
                <div class="col-sm-4 p-0">
                    <a href="category.php" class="image-block">
                        <img alt="" src="{{asset('frontend/assets/img/categ/categ1.jpg')}}" class="img-fluid blur-up lazyload bg-img">
                    </a>
                </div>
                <div class="col-sm-4 p-0">
                    <a href="category.php" class="image-block"><img alt="" src="{{asset('frontend/assets/img/categ/categ2.jpg')}}"
                            class="img-fluid blur-up lazyload bg-img"></a>
                </div>
                <div class="col-sm-4 p-0">
                    <a href="category.php" class="image-block even"><img alt="" src="{{asset('frontend/assets/img/categ/categ3.jpg')}}"
                            class="img-fluid blur-up lazyload bg-img"></a>
                </div>
                <div class="col-sm-4 p-0">
                    <a href="category.php class="image-block">
                        <img alt="" src="{{asset('frontend/assets/img/categ/categ4.jpg" class="img-fluid blur-up lazyload bg-img')}}">
                    </a>
                </div>
                <div class="col-sm-4 p-0">
                    <a href="category.php" class="image-block"><img alt="" src="{{asset('frontend/assets/img/categ/categ5.jpg')}}"
                            class="img-fluid blur-up lazyload bg-img"></a>
                </div>
                <div class="col-sm-4 p-0">
                    <a href="category.php" class="image-block even"><img alt="" src="{{asset('frontend/assets/img/categ/categ6.jpg')}}"
                            class="img-fluid blur-up lazyload bg-img"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- Dropdown hover -->
    @include('frontend.layout.dropdown')
    <!-- Dropdown hover end -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

    <!-- latest jquery-->
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('frontend/assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('frontend/assets/js/slick.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('frontend/assets/js/bootstrap.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('frontend/assets/js/bootstrap-notify.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('flash_message'))
        <?php $status = (Session::get('flash_status') == 200)?'success':'error';?>
        <?php $status_type = (Session::get('flash_status') == 200)?'Success':'Failed';?>
        <script type="text/javascript">
            swal({   
                type: "{{ $status }}",
                title: "{{ $status_type }}",   
                text: "{{ Session::get('flash_message') }}",   
                showConfirmButton: false ,
                showCloseButton: true,
                footer: ''
            });
        </script>
    @endif
</body>

</html>