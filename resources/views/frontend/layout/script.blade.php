<!-- latest jquery-->
    <script src="{{asset('backends/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{asset('backends/assets/js/jquery-ui.min.js')}}"></script>

    <!-- exitintent jquery-->
    <script src="{{asset('backends/assets/js/jquery.exitintent.js')}}"></script>
    <script src="{{asset('backends/assets/js/exit.js')}}"></script>

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

    <!-- Fly cart js-->
    <script src="{{asset('backends/assets/js/fly-cart.js')}}"></script>

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