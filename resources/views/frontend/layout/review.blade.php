<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=+6281215770449" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Floating WhatsApp end -->

    <!-- header start -->
    <?php include 'header.php' ?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Review Pelanggan</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Review</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->

    <section class="section-b-space blog-detail-page review-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="comment-section">
                        <li>
                            <div class="media"><img src="../assets/images/avtar.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                        <div class="rating ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                        fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                        faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                        odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                        lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                        sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                        erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include 'dropdown.php' ?>
    <!-- theme setting -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->


    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="../assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- popper js-->
    <script src="../assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="../assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="../assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>