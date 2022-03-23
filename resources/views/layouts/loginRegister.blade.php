<!DOCTYPE html>
<html lang="en">
   <head>
      @include('layouts.partial.head')
   </head>
   <!-- body -->
    <body class="main-layout">
      <!-- header -->
      <header class="section">
         @include('layouts.partial.header-login-register')
      </header>
      <!-- end header -->
      <div class="center">
        @yield('content')
      </div>

    <!-- footer start-->
      <div style="margin-top: 200px"></div>
      @include('layouts.partial.footer')
   </body>
</html>
