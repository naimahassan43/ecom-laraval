
<!DOCTYPE html>
<html lang="en">
<head>

@include ('frontend.includes.header')
@include ('frontend.includes.css')



</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  @include ('frontend.includes.topbar')
  @include ('frontend.includes.menubar') 
</header>
<!-- ============================================== HEADER : END ============================================== -->

<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- Body Content -->
      @yield('body-content')
    </div>
   
    @include ('frontend.includes.brands')
  </div>
</div>
<!-- /#top-banner-and-menu --> 
@include ('frontend.includes.footer')
@include ('frontend.includes.script')


</body>
</html>