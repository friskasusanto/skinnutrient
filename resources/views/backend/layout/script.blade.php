<!-- latest jquery-->
<script src="{{asset('backends/assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('backends/assets/js/popper.min.js')}}"></script>
<script src="{{asset('backends/assets/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('backends/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('backends/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('backends/assets/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('backends/assets/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('backends/assets/js/chart/chartjs/chart.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backends/assets/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('backends/assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('backends/assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('backends/assets/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{asset('backends/assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('backends/assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('backends/assets/js/counter/counter-custom.js')}}"></script>

<!-- ckeditor js-->
<script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="../assets/js/editor/ckeditor/styles.js"></script>
<script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

<!--peity chart js-->
<script src="{{asset('backends/assets/js/chart/peity-chart/peity.jquery.js')}}"></script>

<!--sparkline chart js-->
<script src="{{asset('backends/assets/js/chart/sparkline/sparkline.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('backends/assets/js/admin-customizer.js')}}"></script>

<!--dashboard custom js-->
<script src="{{asset('backends/assets/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('backends/assets/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('backends/assets/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backends/assets/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{asset('backends/assets/js/admin-script.js')}}"></script>

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