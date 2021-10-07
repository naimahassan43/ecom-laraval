<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.includes.header')
  @include('backend.includes.css')

  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 
@include ('backend.includes.topbar')
@include ('backend.includes.nav')

<!-- Body content start  -->
@yield('adminBodyContent')
<!-- Body content end   -->

  <!-- Main Footer -->

  @include ('backend.includes.footer')


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include ('backend.includes.script')
</body>
</html>
