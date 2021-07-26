<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=+6281215770449" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Floating WhatsApp end -->

    <!-- header start -->
    @include('frontend.layout.header')
    <!-- header end -->

    <!-- breadcrumb start-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Blogs</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/blogs')}}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->


    <!--section start-->
    <section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail"><img src="{{url('blog/'.$blog->images)}}"
                        class="img-fluid blur-up lazyload" alt="">
                    <h3>{{$blog->judul}}</h3>
                    <ul class="post-social">
                        <li>{{$blog->tgl_input}}</li>
                        <li>Posted By : {{$blog->user->name}}</li>
                    </ul>
                    <p>{!!$blog->text!!}</p>
                </div>
            </div>
            <div class="row section-b-space blog-advance">
                <div class="col-lg-6">
                    <div><img src="{{asset('frontend/assets/images/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div><img src="{{asset('frontend/assets/images/blog/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li>Donec ut metus sit amet elit consectetur facilisis id vel turpis.</li>
                        <li>Aenean in mi eu elit mollis tincidunt.</li>
                        <li>Etiam blandit metus vitae purus lacinia ultricies.</li>
                        <li>Nunc quis nulla sagittis, faucibus neque a, tempus metus.</li>
                        <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>Morbi molestie lacus blandit interdum sodales.</li>
                        <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                        <li>Vestibulum fringilla tortor et lorem sagittis,</li>
                        <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>Morbi molestie lacus blandit interdum sodales.</li>
                        <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p>Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque egestas consequat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc at
                        urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis lectus. Pellentesque id
                        dapibus justo. Nunc venenatis non odio sed luctus. Etiam sit amet elit massa.</p>
                    <p>Phasellus quis lorem eros. Aliquam non tincidunt nibh. Nulla quis interdum neque. Mauris volutpat
                        neque eu nunc ornare ullamcorper. Sed neque velit, lobortis eget tellus in, pellentesque ornare
                        nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Maecenas rutrum nisi non nibh egestas lacinia. Cras ut tellus sit amet lacus consequat dictum
                        nec id sapien. Ut pellentesque ac ex ut elementum. Morbi mollis volutpat neque eu volutpat.</p>
                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla
                        bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper
                        tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean
                        suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu.
                        Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec
                        facilisis erat tempor quis. Vestibulum eu vestibulum ex. Maecenas luctus orci sed blandit
                        fermentum. In vulputate eu metus a faucibus. Suspendisse feugiat condimentum congue.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->


    <!-- Dropdown hover -->
    <?php include 'dropdown.php' ?>
    <!-- Dropdown hover end -->


    <!-- tap to top -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top End -->


    <!-- latest jquery-->
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('frontend/assets/js/slick.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('frontend/assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

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