<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield("title") - Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{URL::asset('admin/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body style="font-family: 'Cairo', sans-serif">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.body.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.body.sidebar')

      @yield('admin')

      <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.body.footer')
        <!-- partial -->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{URL::asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{URL::asset('admin/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{URL::asset('admin/js/off-canvas.js')}}"></script>
<script src="{{URL::asset('admin/js/hoverable-collapse.js')}}"></script>
<script src="{{URL::asset('admin/js/misc.js')}}"></script>
<script src="{{URL::asset('admin/js/settings.js')}}"></script>
<script src="{{URL::asset('admin/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{URL::asset('admin/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<!-- Custom js for this page-->
<script src="{{URL::asset('admin/js/data-table.js')}}"></script>
<!-- Custom js for this page-->
<script src="{{URL::asset('admin/js/modal-demo.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
 		@if(Session::has('message'))
 		var type = "{{ Session::get('alert-type','info') }}"
 		switch(type){
    			case 'info':
    			toastr.info(" {{ Session::get('message') }} ");
    			break;

    			case 'success':
    			toastr.success(" {{ Session::get('message') }} ");
    			break;

    			case 'warning':
    			toastr.warning(" {{ Session::get('message') }} ");
    			break;

    			case 'error':
    			toastr.error(" {{ Session::get('message') }} ");
    			break; 
 			}
 		@endif 
	</script>
</body>


</html>
