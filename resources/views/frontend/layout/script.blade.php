<!-- latest jquery-->
    <script src="{{asset('backends/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('backends/assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('backends/assets/js/slick.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('backends/assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('backends/assets/js/lazysizes.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('backends/assets/js/bootstrap.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('backends/assets/js/bootstrap-notify.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('backends/assets/js/script.js')}}"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f630711f0e7167d00111d44/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->